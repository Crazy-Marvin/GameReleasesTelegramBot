# === IMPORT MODULES === #
import requests
from datetime import date
from bs4 import BeautifulSoup

today = date.today() 

# === MAIN PARAMETERS (PC - WINDOWS) === #
html = requests.get("https://www.igdb.com/games/coming_soon?pfilter=6")
soup = BeautifulSoup(html.text, "html.parser")
rows = soup.findAll("div", {"class": "media-body"})
file = open("/var/www/html/game/pc.txt", "w")
for row in rows:
    if str(today.day) in row.text:
        row = row.find("a").text
        file = open("/var/www/html/game/pc.txt", "a")
        file.write(f"{row}\n")
        print(f"{row}")

html = requests.get("https://www.igdb.com/games/coming_soon?pfilter=169")
soup = BeautifulSoup(html.text, "html.parser")
rows = soup.findAll("div", {"class": "media-body"})
file = open("/var/www/html/game/xbox.txt", "w")
for row in rows:
    if str(today.day) in row.text:
        row = row.find("a").text
        file = open("/var/www/html/game/xbox.txt", "a")
        file.write(f"{row}\n")
        print(f"{row}")

html = requests.get("https://www.igdb.com/games/coming_soon?pfilter=130")
soup = BeautifulSoup(html.text, "html.parser")
rows = soup.findAll("div", {"class": "media-body"})
file = open("/var/www/html/game/switch.txt", "w")
for row in rows:
    if str(today.day) in row.text:
        row = row.find("a").text
        file = open("/var/www/html/game/switch.txt", "a")
        file.write(f"{row}\n")
        print(f"{row}")

html = requests.get("https://www.igdb.com/games/coming_soon?pfilter=48")
soup = BeautifulSoup(html.text, "html.parser")
rows = soup.findAll("div", {"class": "media-body"})
file = open("/var/www/html/game/ps4.txt", "w")
for row in rows:
    if str(today.day) in row.text:
        row = row.find("a").text
        file = open("/var/www/html/game/ps4.txt", "a")
        file.write(f"{row}\n")
        print(f"{row}")

html = requests.get("https://www.igdb.com/games/coming_soon?pfilter=34")
soup = BeautifulSoup(html.text, "html.parser")
rows = soup.findAll("div", {"class": "media-body"})
file = open("/var/www/html/game/android.txt", "w")
for row in rows:
    if str(today.day) in row.text:
        row = row.find("a").text
        file = open("/var/www/html/game/android.txt", "a")
        file.write(f"{row}\n")
        print(f"{row}")

html = requests.get("https://www.igdb.com/games/coming_soon?pfilter=39")
soup = BeautifulSoup(html.text, "html.parser")
rows = soup.findAll("div", {"class": "media-body"})
file = open("/var/www/html/game/ios.txt", "w")
for row in rows:
    if str(today.day) in row.text:
        row = row.find("a").text
        file = open("/var/www/html/game/ios.txt", "a")
        file.write(f"{row}\n")
        print(f"{row}")