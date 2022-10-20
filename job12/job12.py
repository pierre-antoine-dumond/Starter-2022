import re

fichier = open("data.txt", "r")
text = fichier.read()
pattern = '[a-zA-Z]+'
matches = re.findall(pattern, text)

print(len(matches))
