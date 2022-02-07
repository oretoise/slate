import requests
import urllib3
import utilities

import pandas as pd

from bs4 import BeautifulSoup

# Disable Insecure Request Warning
urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

def main():
    # Make dataframe to hold links.
    df = pd.DataFrame()

    # Load host information.
    host = utilities.get_host_from_env()
    
    # Load program list.
    programs_list = utilities.get_program_list()

    # Request email list for each program.
    for program in programs_list:
        emails = utilities.get_program_email_list(program)

        # For each email, check the links.
        for email in emails:
            
            # Split the filename into just the day number and generate URL.
            email = email.split('.')[0]
            url = host + program + "/" + email
            
            # Make the request.
            r = requests.get(url)

            # Soupify the result text.
            soup = BeautifulSoup(r.text, 'html5lib')

            for link in soup.findAll('a'):
                if link.has_attr('href'):

                    # Ignore mailto links.
                    if "mailto" in link['href']:
                        continue
                    else:

                        # Look for our links.
                        if 'online.msstate.edu' in link['href'] or 'distance.msstate.edu' in link['href']:
                            insecure = False
                            outdated = False
                            not_found = False

                            if 'http://' in link['href']:
                                insecure = True
                            
                            if 'distance.msstate.edu' in link['href']:
                                outdated = True
                            
                            # req
                            check = requests.get(link['href'], verify=False)
                            if str(check.status_code) == '404':
                                not_found = True
                            
                            link_dict = {
                                "href": link["href"],
                                "insecure": insecure,
                                "outdated": outdated,
                                "not_found": not_found,
                                "email": email,
                                "program": program
                            }

                            df = df.append(link_dict, ignore_index=True)

    
    df = df.drop_duplicates(subset=['href'])
    df.to_csv("links.csv", index=False)

if __name__ == "__main__":
    main()