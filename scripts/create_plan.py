"""
    File: create_plan.py
"""

import argparse
import os
import pandas as pd
import pathlib

def arguments():
    """ Parse arguments. """

    description = 'Create skeleton email files for Slate-compatible communication plan.'
    parser = argparse.ArgumentParser(description=description)
    parser.add_argument("-a", "--Acronym", action="store", help="Program Acronym", required=True)
    parser.add_argument("-d", "--Days", nargs='+', type=int, required=True)
    parser.add_argument("-n", "--Name", action="store", help="Program Name", required=True)
    parser.add_argument("-s", "--Signature", action="store", help="Coordinator Signature", required=True)
    return parser.parse_args()


def homepage(acronym, name, path):
    """ Add link to new plan on homepage. """
    
    # Get to the homepage file.
    home_path = path / "home.blade.php"

    # Read in homepage.
    if home_path.exists():

        # Store lines of homepage file.
        new_homepage = []

        with open(home_path.resolve()) as f:
            home_file = f.read()
            home_array = home_file.split("\n")
            
            # Cut off "@endsection" and "\t</ul>" (<ul> closer)
            # TODO: Determine where "@endsection" is and go from there rather than hardcoding.
            new_homepage = home_array[:-3]

            # Build new program link.
            link = "\t<li><a href=\" {{ url(\'" + acronym.lower() + "') }}\">"
            link += name + "</a></li>"

            # Add new program link.
            new_homepage.append(link)
            new_homepage.append("</ul>")
            new_homepage.append("@endsection")
        
        # print("Homepage: ", home_path)
        # print("New homepage content:")

        # Overwrite homepage with new data.
        with open(home_path.resolve(), 'w') as f:
            for line in new_homepage:
                f.write("%s\n" % line)
                # print(line)


def skeleton(acronym, day_string, content, path, signature, home=False):
    """ Generate skeleton file. """

    # Default file content.
    default = "@extends('layouts.mjml')\n\n@section('content')\n"
    default += content + "\n@endsection"
    
    if not home:
        # Signature section.
        default += "\n\n@section('signature')\n\t@include('signatures."
        default += signature + "')"
        default += "\n@endsection"
        
        # Apply section
        default += "\n\n@section('apply')\n\t@include('common.apply')\n@endsection"
    
    # Generate filename and full file path.
    filename = day_string + ".blade.php"
    path_to_file = path / filename

    # Debugging purposes.
    print("Creating file ", path_to_file)
    # print("File contents:")
    # print(default)
    # print()

    # If the file doesn't exist, create it and write the content.
    if not path_to_file.exists():
        with open(path_to_file.resolve(), 'w') as f:
            f.write(default)


def main(acronym, days, name, signature):
    """ Create skeleton communication plan files and links. """

    # Navigate to /resources/views in the repository.
    path = pathlib.Path(os.getcwd()) / ".." / "resources" / "views"

    # Check if our program exists already.
    program_dir = path / "programs" / acronym.lower()

    # Make the directory if it doesn't exist.
    if program_dir.exists():
        print("Program directory already exists.")
        raise SystemExit
    else:
        print("Making directory ", program_dir)
        program_dir.mkdir(parents=True)
    
    # Import numbers CSV.
    try:
        numbers = pd.read_csv('numbers.csv', encoding="UTF-8")
    except FileNotFoundError:
        print("Unable to locate numbers.csv. Is it in the same directory as this script?")
        raise SystemExit
    
    # Start program homepage content.
    home = "<h3>" + acronym.upper() + " Communication Plan</h3>\n<ul>\n"
    
    # Make each skeleton file.
    for day in days:
        # Get string representation of day value.
        day_string = numbers["String"].values[day]

        # Generate skeleton file content.
        content = "<h3>Day " + str(day) + " - Subject: </h3>"
        
        # Generate file
        skeleton(acronym, day_string, content, program_dir, signature)

        # Build up homepage content.
        home += "\t<li>\n\t\t<a href=\"{{ url('" + acronym.lower() + "/"
        home += day_string + "') }}\">Day " + str(day) + "</a>\n\t</li>\n"

    # Finish program homepage content.
    home += "</ul>"

    # Generate program homepage file.
    skeleton(acronym, "home", home, program_dir, None, True)

    # Add new program to main homepage.
    homepage(acronym, name, path)


if __name__ == '__main__':
    # Parse CLI arguments.
    ARGS = arguments()

    # Call main function
    main(ARGS.Acronym, ARGS.Days, ARGS.Name, ARGS.Signature)