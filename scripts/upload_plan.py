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


def track_links():
    """ Replace links with tracking links. """
    return 0


def upload(acronym, day_int, email, population):
    """ Assuming Slate is open on left-most monitor """

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
    pyautogui.typewrite(day_int)

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
        pyautogui.hotkey('ctr', 'a')

        # Type it in the searchbox.
        pyautogui.typewrite(export)

        # Click it.
        pyautogui.click(850, 970)
    
    # Click Continue
    pyautogui.click(840, 1130)

    # do same for coordinator?
    # no, will have to pull the address from the email
    # TODO: Grab coordinator email address from ID 'coordinator'

    # query editor
    # move back to email editor

    # click 2nd breadcrumb
    pyautogui.click(704, 213)

    # CONTEXT CHANGE: Email View

    # pull email from server
    url = os.getenv("HOST") + "/slate/" + acronym.lower() + "/" + email
    r = requests.get(url)
    raw_html = r.text

    print(raw_html)

    # Pass it through BeautifulSoup

    # TODO: track links (mostly just add the email export...)
    # track_links(soup)
    # click "edit message"

    # CONTEXT CHANGE: Edit Message

    # drag email to recipient
    # set reply to coordinator
    # set sender to coordinator
    # click subject line
    # tw email's subject line

    # remove h3 tag from email html
    # copy edited html to clipboard
    # click view source
    # ctrl a
    # ctrl v
    # click ok
    # click save

    # May need to click "Send Mailing" here and review what it says

    return 0


def main(acronym):
    """ Upload a communication plan to Slate. """

    # Navigate to program directory and check for existence.
    views = pathlib.Path(os.getcwd()) / ".." / "resources" / "views"
    program = views / "programs" / acronym.lower()

    # TODO: For geoscience, split it, then navigate to it.

    if not program.exists():
        print("Program", acronym, "not found! Check spelling.")
        raise SystemExit
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
        print("Unable to locate populations.csv. Is it in the same directory as this script?")
        raise SystemExit

    print("Pulling Slate population...")

    try:
        population = populations_dict[acronym.lower()]
    except KeyError:
        print("Program acronym not in populations.csv. Did you add the population?")
        raise SystemExit
    except ValueError:
        print("Population not found. Does the population exist in Slate? Did you add it to populations.csv?")
        raise SystemExit
    
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
        print('quitting early for debug')
        raise SystemExit


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Load environment variables from .env file
    load_dotenv()

    # Call main function with argument data.
    main(ARGS.Acronym)