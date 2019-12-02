"""
File: utilities.py
Author: Jordan Scruggs, netID: js2506
Description: This file contains functions used throughout this repository.
"""

import os
import pathlib

from dotenv import load_dotenv


def exit_with_error(message):
    """ Display error message and exit. """
    print(message)
    raise SystemExit


def get_host_from_env():
    """ Return the 'HOST' entry from a local .env file. """

    load_dotenv()

    if os.getenv("HOST") is None:
        print("Host not found. Have you set up an environment file?")
        raise SystemExit
    
    return os.getenv("HOST")


def get_program_email_list(program):
    """ Return a list of emails for a given program. """

    # Navigate to 'programs' directory in repository.
    programs = pathlib.Path(os.getcwd()) / ".." / "resources" / "views" / "programs"

    # Handle 'geosciences' subdirectory.
    if "geosciences" in program:
            # Split the path.
            path_parts = program.lower().split('/')
            directory = programs

            # For each folder in the given path, navigate to it.
            for folder in path_parts:
                directory = directory / folder
    else:
        directory = programs / program
    
    emails = os.listdir(directory)
    emails.remove("home.blade.php")

    return emails


def get_program_list():
    """ Return a list of programs by walking the repository directory. """

    # Walk the programs directory.
    programs = pathlib.Path(os.getcwd()) / ".." / "resources" / "views" / "programs"
    programs_list = os.listdir(programs)

    # Walk the geosciences subdirectory.
    geosciences = programs / "geosciences"
    geo_list = os.listdir(geosciences)
    new_list = []

    # Append geosciences list to a new list.
    for item in geo_list:
        new_list.append("geosciences/" + str(item))

    # Append main program list and remove unnecessary 'geosciences' entry.
    programs_list = programs_list + new_list
    programs_list.remove("geosciences")
    
    # Return completed list.
    return programs_list


def track_links(soup):
    """ Replace links with tracking links. """
    # For each link in the email
    for link in soup.findAll('a'):

        # Check to ensure it has an href attribute.
        if link.has_attr('href'):

            # Only track online.msstate.edu links
            if 'https://online.msstate.edu/' in link['href']:

                # Add the capture email tracker.
                new_href = link['href'] + "?cbe_email={{Email}}"

                # Replace the existing link with the new one.
                link['href'] = new_href

    # Return the modified soup.
    return soup