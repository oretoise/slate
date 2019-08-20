import argparse
import pandas as pd
import pyautogui
import update_plan


def arguments():
    """ Process CLI arguments """

    description = 'Update multiple communication plans to Slate.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-l", "--List", action="store", help="CSV of Plans", required=True)
    return parser.parse_args()


def main(list_file):
    """ Batch update plans to Slate. """

    # Attempt to open the provided list file.
    try:
        list_df = pd.read_csv(list_file, encoding="UTF-8")
    except FileNotFoundError:
        update_plan.exit_with_error("Unable to locate provided file. Check path and try again.")
    
    # Go to browser.
    pyautogui.hotkey('win', '1')
    
    # Loop through values.
    for plan in list_df.Plans:
        print("Updating", plan)

        # Go to proper folder in Slate.
        url = "https://goto.msstate.edu/manage/deliver/?folder=Distance%20%2F%20"
        url = url + plan.upper()
        
        pyautogui.hotkey('alt', 'd')
        pyautogui.typewrite(url)
        pyautogui.press('enter')

        # Update the plan.
        update_plan.main(plan)


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.List)