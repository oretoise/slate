import argparse
import pandas as pd
import pyautogui
import update_plan
import utilities


def main():
    """ Batch update plans to Slate. """

    # Get list of all plans.
    plans = utilities.get_program_list()
    
    # Go to browser.
    pyautogui.hotkey('win', '1')

    skip = ['agriculture', 'bba', 'biology', 'bsindt', 'bsis', 'edld', 'elem', 'forestry', 'health', 'history', 'mabm', 'matced', 'mats']
    
    # Loop through values.
    for plan in plans:
        if plan in skip:
            continue

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
    main()