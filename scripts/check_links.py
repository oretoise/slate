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

    # Request email list for each program.
    for program in programs_list:
        emails = utilities.get_program_email_list(program)

        # For each email, check the links.
        for email in emails:
            
            # Split the filename into just the day number and generate URL.
            email = email.split('.')[0]
            url = host + "/slate/" + program + "/" + email
            
            # Make the request.
            r = requests.get(url)

            # Soupify the result text.
            soup = BeautifulSoup(r.text, 'html5lib')

            for link in soup.findAll('a'):
                if link.has_attr('href'):
                    if "mailto" in link['href']:
                        continue
                    else:

                        if 'online.msstate.edu' in link['href'] or 'distance.msstate.edu' in link['href']:
                            problem = False

                            if 'http://' in link['href']:
                                print("INSECURE")
                                problem = True
                            
                            if 'distance.msstate.edu' in link['href']:
                                print("OUTDATED")
                                problem = True
                            
                            if problem:
                                print(link['href'])
                            
                            # req
                            check = requests.get(link['href'], verify=False)
                            if str(check.status_code) == '404':
                                print("404:", link['href'])


if __name__ == "__main__":
    main()