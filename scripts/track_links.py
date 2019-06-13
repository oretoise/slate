import argparse
import glob
import os
import pathlib


def arguments():
    """ Parse CLI arguments. """

    description = "Add tracking codes to links."
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-d", "--Debug", action="store_true", help="Enable debugging")

    required = parser.add_argument_group("required arguments")
    required.add_argument("-p", "--Program", action="store", help="Program Acronym (ex: 'msei')", required=True)

    return parser.parse_args()


def track_links(path, debug):
    """ Track distance.msstate.edu links in folder."""

    # Grab all *.php files in the path.
    for email in path.glob("*.php"):

        # Resolve the path to eliminate '..'
        # This is a pathlib.Path object.
        email = email.resolve()

        # Get the filename.
        # String
        filename = email.name

        # Skip home.blade.php
        if filename == 'home.blade.php':
            continue

        # 
        # Debug
        print(email)
        print(filename)
        print()

    return


def main(program, debug):
    """ Convert links for an entire plan. """

    # Navigate to /resources/views in the repository.
    path = pathlib.Path(os.getcwd()) / ".." / "resources" / "views"

    # Check if our program exists already.
    program_dir = path / "programs" / program.lower()

    # Exit if program not found.
    if program_dir.exists():
        print("Program directory exists. Converting links.")
        track_links(program_dir, debug)
        
    else:
        print("Program not found. Does it exist?")
        raise SystemExit


if __name__ == "__main__":
    # Parse CLI arguments.
    ARGS = arguments()

    # Call main function
    main(ARGS.Program, ARGS.Debug)