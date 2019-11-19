import os
import pathlib
import requests
import urllib3
urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

from bs4 import BeautifulSoup
from dotenv import load_dotenv

def main():
    load_dotenv()

    if os.getenv("HOST") is None:
        print("host missing")
        raise SystemExit
    
    programs = pathlib.Path(os.getcwd()) / ".." / "resources" / "views" / "programs"
    programs_list = os.listdir(programs)

    geosciences = programs / "geosciences"
    geo_list = os.listdir(geosciences)
    new_list = []

    for item in geo_list:
        new_list.append("geosciences/" + str(item))

    programs_list = programs_list + new_list
    programs_list.remove("geosciences")

    print(programs_list)

    for program in programs_list:
        if "geosciences" in program:
            # Split the path.
            path_parts = program.lower().split('/')
            #print(path_parts)

            directory = programs

            # For each folder in the given path, navigate to it.
            for folder in path_parts:
                directory = directory / folder
        else:
            directory = programs / program
        
        emails = os.listdir(directory)

        for email in emails:
            if email == 'home':
                continue
            
            email = email.split('.')[0]
            url = os.getenv("HOST") + "/slate/" + program + "/" + email

            #print(program, "-", email)
            
            # get
            r = requests.get(url)

            # bs
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
                            #print(check.status_code)
                            if str(check.status_code) == '404':
                                print("404:", link['href'])
                            

if __name__ == "__main__":
    main()