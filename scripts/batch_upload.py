import argparse
import pandas as pd
import upload_plan


def arguments():
    """ Process CLI arguments """

    description = 'Upload multiple communication plans to Slate.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-l", "--List", action="store", help="CSV of Plans", required=True)
    return parser.parse_args()


def main(list_file):
    """ Batch upload plans to Slate. """

    # Attempt to open the provided list file.
    try:
        list_df = pd.read_csv(list_file, encoding="UTF-8")
    except FileNotFoundError:
        upload_plan.exit_with_error("Unable to locate provided file. Check path and try again.")
    
    # Loop through values.
    for plan in list_df.Plans:
        upload_plan.main(plan)


if __name__ == "__main__":
    # Parse CLI arguments
    ARGS = arguments()

    # Call main function with argument data.
    main(ARGS.List)