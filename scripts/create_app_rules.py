import argparse
import pandas as pd
import pyautogui
from update_plan import exit_with_error


def arguments():
    """ Process CLI arguments """

    description = 'Simple script to create GR application rules. Because I am lazy.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-l", "--List", action="store", help="CSV of Plans", required=True)
    return parser.parse_args()


def main(list_file):
    """ Batch update plans to Slate. """

    # Attempt to open the provided list file.
    try:
        # Read in CSV.
        # Expected structure: short_name, app_value, distance_value
        list_df = pd.read_csv(list_file, encoding="UTF-8")

    except FileNotFoundError:
        exit_with_error("Unable to locate provided file. Check path and try again.")
    
    # Go to browser.
    pyautogui.hotkey('win', '1')

    # Set starting rule priority.
    rule_priority = 9
    
    # Loop through values.
    for row in list_df.iterrows():
        print("Updating", row['distance_value'])

        # Go to proper folder in Slate.
        url = "https://goto.msstate.edu/manage/database/rules/?folder=Defaults%20%2F%20Distance"
        
        pyautogui.hotkey('alt', 'd')
        pyautogui.typewrite(url)
        pyautogui.press('enter')

        # Open our example rule.

        # Click Copy Rule

        # Determine the name.
        rule_name = "Distance - " + row['short_name'] + " - Set Program for Campus 5 Apps"

        # Typewrite rule name.
        pyautogui.typewrite(rule_name)

        # Set rule priority to last priority + 1

        # Click Save

        # Edit the GR Academic Interest (App) filter.

        # Hit tab

        # Typewrite row['app_value']

        # Click result.

        # Click save.

        # Click save (on rule).

        # Increment rule priority variable.
        rule_priority = rule_priority + 1


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.List)