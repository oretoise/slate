import argparse
import pandas as pd


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


def create(row):
    """ Create advisor notification mailing. """
    
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
        create(row)


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.List)