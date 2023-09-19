import requests

#replace top with whatever you want to use for bruteforcing
for i in range(1,1001):
    response = requests.get(f'http://172.25.0.20?guess={i}')
    currentpagetext = response.text
    if "wrong!" not in currentpagetext:
        print(response.text)
#replace with (if youre gtting spammed) whatever your getting spammed with nothing/does not print spam message
