import argparse
import os
import pathlib
import pyautogui
import pyperclip
import requests

from bs4 import BeautifulSoup
from dotenv import load_dotenv
from upload_plan import exit_with_error, track_links

# PyAutoGUI settings
pyautogui.PAUSE = 5
pyautogui.FAILSAFE = True

def arguments():
    """ Process CLI arguments """

    description = 'Update communication plan in Slate.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-a", "--Acronym", action="store", help="Program Acronym", required=True)
    return parser.parse_args()


def update(acronym, offset):
    """ Update an email in Slate. """

    # Open the email.
    y_coord = 330 + (offset * 28)
    pyautogui.click(630, y_coord)

    # Double-click the email name.
    pyautogui.click(700, 240, clicks=3)

    # Hit Ctrl-C to copy the now-selected email name.
    pyautogui.hotkey('ctrl', 'c')

    # Grab the clipboard contents.
    email_name = pyperclip.paste()

    # Split on underscore
    email_name_parts = email_name.split('_')

    # Get just the last part.
    email = email_name_parts[2].lower()

    # Stop the mailing.
    pyautogui.click(1720, 410)
    pyautogui.click(980, 1020)
    pyautogui.typewrite("STOP")
    pyautogui.press('enter')

    # click "edit message"
    pyautogui.click(1760, 350)

    # pull email from server
    url = os.getenv("HOST") + "/slate/" + acronym.lower() + "/" + email
    r = requests.get(url)
    raw_html = r.text

    # Pass it through BeautifulSoup
    soup = BeautifulSoup(raw_html, 'html5lib')

    # Add Capture CBE tracking
    tracked_body = track_links(soup)

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
    pyautogui.click(1615, 1085)

    # click save
    pyautogui.click(745, 1111)

    # Click "Send Mailing"
    pyautogui.click(1730, 380)

    # Click "Stop Date/Time"
    pyautogui.click(1223, 817)

    # Hit Ctrl-A
    pyautogui.hotkey('ctrl', 'a')

    # Delete the value.
    pyautogui.press('delete')

    # Tab to next field.
    pyautogui.press('tab')

    # Delete the value.
    pyautogui.press('delete')

    # Click "Save settings"
    pyautogui.click(1000, 1015)

    # Click "Send Mailing"
    pyautogui.click(1730, 380)
    pyautogui.click(989, 1017)
    pyautogui.typewrite("SEND")
    pyautogui.press("enter")

    # Click "All Mailings" in top left
    pyautogui.click(638, 199)


    
    return


def main(acronym):
    """ Update a communication plan in Slate, email by email. """
    # Load environmental variables.
    load_dotenv()

    # Determine number of emails.
    print("Determining number of emails...")

    # TODO: Move this to general function for use in other scripts.

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
    
    # Get list of files and sort on numbers dictionary.
    files = os.listdir(program)

    # Remove program homepage.
    if 'home.blade.php' in files:
        print("Removing program homepage from list")
        files.remove('home.blade.php')
    
    #print("File list:", files)
    print("Number of files:", len(files))

    for i in range(len(files)):
        print("Updating email", i + 1)
        update(acronym, i)

    return

if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.Acronym)