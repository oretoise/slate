import argparse
import datetime
import os
import pandas as pd
import pathlib
import pyautogui
import pyperclip
import requests

from bs4 import BeautifulSoup
from dotenv import load_dotenv

# PyAutoGUI settings
pyautogui.PAUSE = 5
pyautogui.FAILSAFE = True


def arguments():
    """ Process CLI arguments """

    description = 'Upload entire communication plan to Slate.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-a", "--Acronym", action="store", help="Program Acronym", required=True)
    return parser.parse_args()


def exit_with_error(message):
    """ Display error message and exit. """
    print(message)
    raise SystemExit


def get_coordinator(soup):
    """ Find coordinator text and return it. """

    # Grab the coordinator name and address from the email.
    name = soup.find('span', {'id' : 'coordinator_name'}).text
    email = soup.find('span', {'id' : 'coordinator_email'}).text

    # Put it in the following format:
    # '"Sender" <address@domain.suffix>'
    sender = "\"" + name + "\" <" + email + ">"
    
    # Return it.
    return sender


def get_subject(soup):
    """ Find subject text and return it. """
    # Grab the h3 tag.
    subject_h3 = soup.findAll('h3')[0]

    # Split it on colon.
    h3_list = str(subject_h3).split(":")

    # Return just the subject line, minus the ending tag.
    return h3_list[1][1:-5]


def track_links(soup):
    """ Replace links with tracking links. """
    # For each link in the email
    for link in soup.findAll('a'):

        # Check to ensure it has an href attribute.
        if link.has_attr('href'):

            # Only track online.msstate.edu links
            if 'https://online.msstate.edu/' in link['href']:

                # Add the capture email tracker.
                new_href = link['href'] + "?cbe_email={{Email}}"

                # Replace the existing link with the new one.
                link['href'] = new_href

    # Return the modified soup.
    return soup


def upload(acronym, day_int, email, population):
    """ Assuming Slate is open on left-most monitor """

    # TODO: Split this into collapsible functions for readability.

    # Move mouse to Deliver
    pyautogui.moveTo(1013, 161)

    # Click on the pinned "Distance" folder
    pyautogui.click(1013, 336)

    # CONTEXT CHANGE: Email Listing

    # Click "New Mailing"
    pyautogui.click(652, 272)

    # Generate internal email name.
    email_name = "CDE_" + acronym.upper() + "_" + email.upper()

    # Typewrite email name
    pyautogui.typewrite(email_name)

    # tab, typewrite "Dist"
    pyautogui.press('tab')
    pyautogui.typewrite("Dist")

    # tab, select "Other", typewrite plan acronym
    pyautogui.press('tab')
    pyautogui.typewrite("O")
    pyautogui.typewrite(acronym.upper())

    # tab over to UTM, typewrite "E"
    # This enables UTM tracking for the email.
    for _ in range(4):
        pyautogui.press('tab')
    pyautogui.typewrite("E")

    # typewrite source, tab, tab, term, tab, content, tab, campaign
    pyautogui.press('tab')
    
    # source
    now = datetime.datetime.now()
    source = "Day " + str(day_int)
    pyautogui.typewrite(source)

    for _ in range(4):
        pyautogui.press('tab')

    # campaign
    now = datetime.datetime.now()
    campaign = acronym.upper() + "_" + str(now.year)
    pyautogui.typewrite(campaign)

    # Click save (or tab and enter)
    pyautogui.click(986, 970)

    # CONTEXT CHANGE: Email View

    # click "Edit Recipient Lists"
    pyautogui.click(1794, 328)

    # click "new query"
    pyautogui.click(649, 305)

    # typewrite a name
    query_name = acronym.upper() + " Day " + email
    pyautogui.typewrite(query_name)

    # Click Save
    pyautogui.click(953, 1034)

    # CONTEXT CHANGE: Query Editor

    # Click Filter
    pyautogui.click(1862, 876)

    # tw "population"
    pyautogui.typewrite("population timestamp days")

    # Click "Popuation Timestamp Days"
    pyautogui.click(824, 542)

    # Click Continue
    pyautogui.click(845, 1130)

    # Click Search
    pyautogui.click(964, 625)

    # Typewrite population name
    pyautogui.typewrite(population)

    # Click first result
    pyautogui.click(1149, 625)

    # tab, tw # of days
    pyautogui.press('tab')
    pyautogui.typewrite(str(day_int))

    # Click Save
    pyautogui.click(953, 1096)

    # Click Export
    pyautogui.click(1861, 625)

    # Grab query exports
    exports = ["First", "Email", "Slate"]
    for export in exports:
        # Click searchbox.
        pyautogui.click(1035, 407)

        # Ctrl-A
        pyautogui.hotkey('ctrl', 'a')

        # Type it in the searchbox.
        pyautogui.typewrite(export)

        # Click it.
        pyautogui.click(850, 570)
    
    # Click Continue
    pyautogui.click(840, 1130)

    # Go back to Email View.
    pyautogui.click(704, 213)

    # CONTEXT CHANGE: Email View

    # pull email from server
    url = os.getenv("HOST") + "/slate/" + acronym.lower() + "/" + email
    r = requests.get(url)
    raw_html = r.text

    # Pass it through BeautifulSoup
    soup = BeautifulSoup(raw_html, 'html5lib')

    # Add Capture CBE tracking
    tracked_body = track_links(soup)

    # click "edit message"
    pyautogui.click(1760, 367)

    # CONTEXT CHANGE: Edit Message

    # drag email to recipient
    pyautogui.moveTo(1671, 414)
    pyautogui.dragTo(1200, 480, 1)

    # Grab coordinator's email address from the email.
    coordinator_email = get_coordinator(tracked_body)

    # set sender to coordinator
    pyautogui.click(1209, 447)
    pyautogui.hotkey('ctrl', 'a')
    pyautogui.typewrite(coordinator_email)

    # Grab subject line from email.
    subject = get_subject(tracked_body)

    # click subject line
    pyautogui.click(900, 554)

    # Typewrite subject line.
    pyautogui.typewrite(subject)

    # remove h3 tag from email html
    h3_tag = tracked_body.findAll('h3')[0]
    h3_tag.replaceWith('')

    # copy edited html to clipboard
    pyperclip.copy(str(tracked_body))

    # click view source
    pyautogui.click(1500, 615)

    # ctrl a
    pyautogui.hotkey('ctrl', 'a')

    # ctrl v
    pyautogui.hotkey('ctrl', 'v')

    # click ok
    pyautogui.click(1615, 1100)

    # click save
    pyautogui.click(745, 1132)

    # Set email schedule, run indefinitely, delivery windows, and mark it as ready to send.
    # Click "Send Message"
    pyautogui.click(1750, 400)

    # Hit tab 3 times.
    for _ in range(3):
        pyautogui.press('tab')
    
    # Press space to check "Continue sending indefinitely"
    pyautogui.press('space')

    # Hit tab 5 times. Gets us to email schedule.
    for _ in range(5):
        pyautogui.press('tab')
    
    # Check all days of the week.
    for _ in range(7):
        pyautogui.press('space')
        pyautogui.press('tab')
    
    if email == "zero":
        # Select all delivery windows.
        for _ in range(5):
            pyautogui.press('space')
            pyautogui.press('tab')
    else:
        # Select only Midday
        for _ in range(2):
            pyautogui.press('tab')
        pyautogui.press('space')
    
    # click "Send Mailing"
    pyautogui.click(980, 1030)
    pyautogui.typewrite("SEND")
    pyautogui.press("enter")


def main(acronym):
    """ Upload a communication plan to Slate. """
    print("Uploading", acronym)
    # Load environment variables from .env file
    load_dotenv()

    # Environmental file check.
    if os.getenv("HOST") is None:
        exit_with_error("Environmental file not found or HOST env entry not defined!")

    # Navigate to the local views folder.
    views = pathlib.Path(os.getcwd()) / ".." / "resources" / "views"

    # For geoscience, split it, then navigate to it.
    if "geosciences" in acronym.lower():

        # Split the path.
        path_parts = acronym.lower().split('/')

        # Navigate to the programs folder first.
        program = views / "programs"

        # For each folder in the given path, navigate to it.
        for folder in path_parts:
            program = program / folder
    else:
        # Otherwise, go directly there.
        program = views / "programs" / acronym.lower()

    if not program.exists():
        message = "Program " + acronym + " not found! Check spelling."
        exit_with_error(message)
    else:
        print("Program found. Finding files...")
    
    # Import numbers.csv using Pandas and turn into dict.
    try:
        numbers = pd.read_csv('numbers.csv', encoding="UTF-8")
        numbers_dict = dict(zip(numbers.String, numbers.Integer))
    except FileNotFoundError:
        exit_with_error("Unable to locate numbers.csv. Is it in the same directory as this script?")
    
    # Import populations.csv using Pandas to grab Slate population.
    try:
        populations = pd.read_csv('populations.csv', encoding="UTF-8")
        populations_dict = dict(zip(populations.Acronym, populations.Population))
    except FileNotFoundError:
        exit_with_error("Unable to locate populations.csv. Is it in the same directory as this script?")

    print("Pulling Slate population...")

    try:
        population = populations_dict[acronym.lower()]
    except KeyError:
        exit_with_error("Program acronym not in populations.csv. Did you add the population?")
    except ValueError:
        exit_with_error("Population not found. Does the population exist in Slate? Did you add it to populations.csv?")
    
    print("Population found:", population)

    # Get list of files and sort on numbers dictionary.
    files = os.listdir(program)

    # Remove program homepage.
    if 'home.blade.php' in files:
        print("Removing program homepage from list")
        files.remove('home.blade.php')
    
    # Sort based on numbers_dict positioning.
    print("Sorted files by day number...")
    files = sorted([x.split('.')[0] for x in files], key=numbers_dict.get)
    print("File list:", files)

    # Upload each file to Slate.
    for email in files:
        upload(acronym, numbers_dict[email], email, population)


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.Acronym)