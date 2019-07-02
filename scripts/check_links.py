import os
import pathlib
import requests

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
            email = email.split('.')[0]
            url = os.getenv("HOST") + "/slate/" + program + "/" + email
            
            # get
            r = requests.get(url)

            # bs
            soup = BeautifulSoup(r.text, 'html5lib')

            for link in soup.findAll('a'):
                if link.has_attr('href'):
                    if "mailto" in link['href']:
                        continue
                    else:
                        print(link['href'])
            

if __name__ == "__main__":
    main()