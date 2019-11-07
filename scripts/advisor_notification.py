import argparse
import pandas as pd
import pathlib
import pyautogui
import pyperclip

# PyAutoGUI settings
pyautogui.PAUSE = 5
pyautogui.FAILSAFE = True


def arguments():
    """ Process CLI arguments """

    description = 'Upload multiple communication plans to Slate.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-l", "--List", action="store", help="CSV of Advisors", required=True)
    return parser.parse_args()


def exit_with_error(message):
    """ Display message and exit. """
    print(message)
    exit()


def create(row, message):
    """ Create advisor notification mailing. """
    
    # Move mouse to Deliver
    pyautogui.moveTo(1013, 161)

    # Click on the pinned "Distance" folder
    pyautogui.click(1060, 317)

    # CONTEXT CHANGE: Email Listing

    # Click "New Mailing"
    pyautogui.click(671, 254)

    # Generate internal email name.
    email_name = "CDE - Advisor Notification - " + row['app_program']

    # Typewrite email name
    pyautogui.typewrite(email_name)

    # tab, typewrite "Dist"
    pyautogui.press('tab')
    pyautogui.typewrite("Dist")

    # tab, select "Other", typewrite folder
    pyautogui.press('tab')
    pyautogui.typewrite("O")
    pyautogui.typewrite("Advisor_Notifications")

    # tab thrice
    for _ in range(3):
        pyautogui.press('tab')
    
    # press down to change opt out setting
    pyautogui.press('down')

    # click "Save"
    pyautogui.click(990, 957)

    # context change: email view

    # click "Edit Recipient Lists"
    pyautogui.click(1756, 298)

    # click "new query"
    pyautogui.click(649, 285)

    # typewrite a name
    query_name = "CDE Advisor Notification - " + row['app_program']
    pyautogui.typewrite(query_name)

    for _ in range(4):
        pyautogui.press('tab')
    
    # typewrite "App" to select Application base
    pyautogui.typewrite('App')

    # Click Save
    pyautogui.click(966, 1018)

    # context change: query editor

    # Click Filter
    pyautogui.click(1862, 876)

    # typewrite "has application by decision, decision status"
    pyautogui.typewrite('has application by decision, decision status')

    # Select the filter
    pyautogui.click(824, 542)

    # Click Continue
    pyautogui.click(845, 1115)

    # tab twice
    for _ in range(2):
        pyautogui.press('tab')
    
    # type "admit" to get just admit decisions
    pyautogui.typewrite('admit')

    # for undergrad, select just those
    if row['app_field'] == "UG Academic Interest (App)":
        pyautogui.click(1245, 660)
        pyautogui.keyDown('ctrl')
        pyautogui.click(1245, 680)
        pyautogui.keyUp('ctrl')
    else:
        # graduate, select the "GR" decisions
        pyautogui.click(1152, 730)
        pyautogui.keyDown('ctrl')
        pyautogui.click(1152, 745)
        pyautogui.click(1152, 760)
        pyautogui.keyUp('ctrl')
    
    # click "released/queued"
    pyautogui.click(1148, 904)

    # click "save"
    pyautogui.click(968, 1081)

    # make "campus (app) == online" filter
    pyautogui.click(1862, 876)
    pyautogui.typewrite('Campus (App)')
    pyautogui.click(824, 542)
    pyautogui.click(845, 1115)
    pyautogui.click(1195, 636)
    pyautogui.click(968, 1081)

    # make program filter
    # Click Filter
    pyautogui.click(1862, 876)
    pyautogui.typewrite(row['app_field'])
    pyautogui.click(1008, 546)
    pyautogui.click(853, 1112)
    pyautogui.press('tab')
    pyautogui.typewrite(row['app_program'])
    
    # click result
    pyautogui.click(1178, 602)
    # save
    pyautogui.click(968, 1081)

    # Set up export fields for the message
    # Grab Email, Name, and Mobile

    # Click Export
    pyautogui.click(1861, 600)

    # Grab Name
    pyautogui.click(1360, 763)

    # Grab Email
    pyautogui.click(1146, 1052)

    # Grab Mobile
    pyautogui.click(1569, 1054)

    # Grab NetID
    pyautogui.click(1078, 418)
    pyautogui.typewrite("NetID")
    pyautogui.click(1536, 575)
    pyautogui.press('end')
    pyautogui.click(904, 1063)

    if row['app_field'] == "UG Academic Interest (App)":
        exports = [row['app_field'], "UG Entry Term (App)", "ERP ID"]
    else:
        exports = [row['app_field'], "GR Entry Term (App)", "ERP ID"]
    
    for export in exports:
        # Click searchbox.
        pyautogui.click(1035, 407)

        # Ctrl-A
        pyautogui.hotkey('ctrl', 'a')

        # Type it in the searchbox.
        pyautogui.typewrite(export)

        # Click it.
        pyautogui.click(850, 570)
    
    # click "continue"
    pyautogui.click(860, 1112)
    
    # go back to email view
    pyautogui.click(789, 203)

    # context change: email view

    # click "edit message"
    pyautogui.click(1760, 350)

    # tab twice
    for _ in range(2):
        pyautogui.press('tab')
    
    recipient = "\"" + row['primary_name'] + "\" <" + row['primary_email'] + ">"
    pyautogui.typewrite(recipient)

    pyautogui.press('tab')
    if str(row['cc']) is not "n":
        pyautogui.typewrite(row['cc'])

    pyautogui.press('tab')
    subject = "New Admit for " + row['app_program'] + " - {{Name}}"
    pyautogui.typewrite(subject)

    for _ in range(2):
        pyautogui.click(1488, 610)
    
    pyperclip.copy(message)
    
    pyautogui.hotkey('ctrl', 'a')
    pyautogui.hotkey('ctrl', 'v')

    pyautogui.click(1602, 1085)
    pyautogui.click(762, 1110)

    # send mailing
    pyautogui.click(1748, 380)

    # Hit tab 3 times.
    for _ in range(3):
        pyautogui.press('tab')
    
    # Press space to check "Continue sending indefinitely"
    pyautogui.press('space')

    # Hit tab 5 times. Gets us to email schedule.
    for _ in range(5):
        pyautogui.press('tab')
    
    # Check all days of the week.
    for _ in range(5):
        pyautogui.press('space')
        pyautogui.press('tab')
    
    # skip sat/sun
    for _ in range(2):
        pyautogui.press('tab')
    
    for _ in range(2):
        pyautogui.press('tab')
    pyautogui.press('space')

    # click "send mailing"
    pyautogui.click(998, 1016)
    pyautogui.typewrite("SEND AND IGNORE WARNINGS")
    pyautogui.press('enter')

    return

def main(list_file):
    """ Create advisor notification emails in Slate. """

    # Attempt to open the provided list file.
    try:
        list_df = pd.read_csv(list_file, encoding="UTF-8")
    except FileNotFoundError:
        exit_with_error("Unable to locate provided file. Check path and try again.")
    
    # Loop through values.
    for index, row in list_df.iterrows():
        print("Index:", index, "| Creating", row['app_program'])
        if row['app_field'] == "UG Academic Interest (App)":
            message = pathlib.Path('./ug_advisor_notification.txt').read_text()
        else:
            message = pathlib.Path('./gr_advisor_notification.txt').read_text()
        create(row, message)
    
    return


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.List)