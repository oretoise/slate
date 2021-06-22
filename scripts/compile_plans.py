import requests
import urllib3
import utilities

from bs4 import BeautifulSoup

# Disable Insecure Request Warning
urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

def main():
    # Load host information.
    host = utilities.get_host_from_env()

    # Load program list.
    programs_list = utilities.get_program_list()

    for program in programs_list:
        # Generate URL to request
        url = host + "/compile/" + program

        print("Requesting", program)

        # Make the request
        r = requests.get(url)

        # Check result.
        if str(r.status_code) == '404':
            print("Error 404 on compile request.")


if __name__ == "__main__":
    main()
