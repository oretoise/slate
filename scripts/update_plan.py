import argparse
import os
import pathlib
import pyautogui
import pyperclip
import requests
import utilities

from bs4 import BeautifulSoup

# PyAutoGUI settings
pyautogui.PAUSE = 10
pyautogui.FAILSAFE = True


def arguments():
    """ Process CLI arguments """

    description = 'Update communication plan in Slate.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-a", "--Acronym", action="store", help="Program Acronym", required=True)
    parser.add_argument("-s", "--Skip", action="store", help="Skip first _ emails", nargs='?', const=0, default=0, type=int)
    return parser.parse_args()


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


def update(acronym, host, offset):
    """ Update an email in Slate. """

    # Open the email.
    y_coord = 344 + (offset * 28)
    print("Moving to", y_coord)
    pyautogui.click(630, y_coord)

    # Triple-click the email name.
    pyautogui.click(700, 260, clicks=3)

    # Hit Ctrl-C to copy the now-selected email name.
    pyautogui.hotkey('ctrl', 'c')

    # Grab the clipboard contents.
    email_name = pyperclip.paste()

    # Split on underscore
    email_name_parts = email_name.split('_')

    # Get just the last part.
    email = email_name_parts[2].lower()

    # Stop the mailing.
    pyautogui.click(1840, 425)
    pyautogui.click(980, 1020)
    pyautogui.typewrite("STOP")
    pyautogui.press('enter')

    # click "edit message"
    pyautogui.click(1800, 350)

    # pull email from server
    url = host + acronym.lower() + "/" + email
    r = requests.get(url)
    print(r)
    raw_html = r.text

    # Pass it through BeautifulSoup
    soup = BeautifulSoup(raw_html, 'html5lib')

    # Add Capture CBE tracking
    tracked_body = utilities.track_links(soup)

    # Grab coordinator's email address from the email.
    coordinator_email = get_coordinator(tracked_body)

    # set sender to coordinator
    pyautogui.click(1209, 426)
    pyautogui.hotkey('ctrl', 'a')
    pyautogui.typewrite(coordinator_email)

    # Grab subject line from email.
    subject = get_subject(tracked_body)

    # click subject line
    pyautogui.click(900, 525)

    # ctrl a
    pyautogui.hotkey('ctrl', 'a')

    # Typewrite subject line.
    pyautogui.typewrite(subject)

    # remove h3 tag from email html
    h3_tag = tracked_body.findAll('h3')[0]
    h3_tag.replaceWith('')

    # copy edited html to clipboard
    pyperclip.copy(str(tracked_body))

    # click view source
    pyautogui.click(1425, 615)

    # ctrl a
    pyautogui.hotkey('ctrl', 'a')

    # ctrl v
    pyautogui.hotkey('ctrl', 'v')

    # click ok
    pyautogui.click(1760, 1110)

    # click save
    pyautogui.click(745, 1111)

    # Click "Send Mailing"
    pyautogui.click(1820, 400)

    # # Click "Stop Date/Time"
    # pyautogui.click(1223, 817)

    # # Hit Ctrl-A
    # pyautogui.hotkey('ctrl', 'a')

    # # Delete the value.
    # pyautogui.press('delete')

    # # Tab to next field.
    # pyautogui.press('tab')

    # # Delete the value.
    # pyautogui.press('delete')

    # Click "Save settings"
    # pyautogui.click(1000, 1015)

    # Click "Send Mailing"
    pyautogui.click(1730, 380)
    pyautogui.click(989, 1017)
    pyautogui.typewrite("SEND")
    pyautogui.press("enter")

    # Click "All Mailings" in top left
    pyautogui.click(580, 210)


def main(acronym, skip):
    """ Update a communication plan in Slate, email by email. """
    # Load host information.
    host = utilities.get_host_from_env()

    # Request email list for the program.
    emails = utilities.get_program_email_list(acronym)
    
    print("File list:", emails)

    # Get the static number of emails.
    num_emails = len(emails)

    # Only go through the needed ones.
    needed = num_emails - skip

    # Update each email.
    for i in range(needed):

        # Skip _ number of emails if necessary. Disable this after finishing the current plan.
        #if i == 0:
        i = i + skip

        print("Updating email", i)
        update(acronym, host, i)


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.Acronym, ARGS.Skip)