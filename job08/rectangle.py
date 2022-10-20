largeur = int(input("Quel est la largeur du rectangle :"))
hauteur = int(input("Quel est la hauteur du rectangle :"))
x = "|"
y = "-"
w = " "
print(f"|{largeur*y}|")
while hauteur != 0:
    print(f"|{largeur*w}|")
    hauteur -= 1
print(f"|{largeur*y}|")
