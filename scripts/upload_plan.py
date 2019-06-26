import argparse
import os
import pandas as pd
import pathlib
import pyautogui
import pyperclip
import requests

from dotenv import load_dotenv
# os.getenv("OUTPUT_FILE")

# PyAutoGUI settings
pyautogui.PAUSE = 5
pyautogui.FAILSAFE = True


def arguments():
    """ Process CLI arguments """

    description = 'Upload entire communication plan to Slate.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-a", "--Acronym", action="store", help="Program Acronym", required=True)
    return parser.parse_args()


def upload(acronym, email):
    """ Assuming Slate is open on left-most monitor """

    # Move mouse to Deliver
    pyautogui.moveTo(1013, 161)

    # Click on the pinned "Distance" folder
    pyautogui.click(1013, 336)

    # CONTEXT CHANGE: Email Listing

    # Click "New Mailing"
    pyautogui.click(652, 272)

    # Generate internal email name.
    email_name = "CDE_" + acronym.upper() + email.upper()

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
    for _ in range(4):
        pyautogui.press('tab')
    pyautogui.typewrite("E")

    
    # typewrite source, tab, tab, term, tab, content, tab, campaign
    # Click save (or tab and enter)

    # page loads to email view

    # click "Edit Recipient Lists"
    # click "new query"
    # typewrite a name
    # Click Save

    # query editor

    # Click Filter
    # tw "population"
    # Click "Popuation Timestamp Days"
    # Click Continue
    # Click Search
    # tw "Distance - " + $short_name
    # Click first result
    # tab, tw # of days
    # Click save

    # query editor

    # Click Export
    # tw "first"
    # click first result
    # click search
    # ctrl a
    # tw "email"
    # click first result
    # click search
    # ctrl a
    # tw "slate"
    # click first result
    # click continue
    # do same for coordinator?

    # query editor
    # move back to email editor

    # click 2nd breadcrumb

    # email view

    # pull email from server
    # track links
    # click "edit message"

    # Edit Message

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


def track_links():
    """ Replace links with tracking links. """
    return 0


def main(acronym):
    """ Upload a communication plan to Slate. """

    # Navigate to program directory and check for existence.
    views = pathlib.Path(os.getcwd()) / ".." / "resources" / "views"
    program = views / "programs" / acronym.lower()

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
        print("Unable to locate numbers.csv. Is it in the same directory as this script?")
        raise SystemExit

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
        upload(acronym, email)
        print('quitting early for debug')
        raise SystemExit


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Load environment variables from .env file
    load_dotenv()

    # Call main function with argument data.
    main(ARGS.Acronym)