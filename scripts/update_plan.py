import argparse
import pyautogui

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


def main(program):
    return

if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.Acronym)