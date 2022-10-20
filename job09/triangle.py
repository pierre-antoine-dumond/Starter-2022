hauteur = int(input("Quel est la hauteur du triangle ? "))
base = hauteur
x = " "
y = "_"
def triangle(hauteur):
    for i in range (1,hauteur,++1):
        print(f"{(hauteur-i)*x}/{int(i-1)*2*x}\\")
    print(f"/{y*(base-1)*2}\\")
triangle(hauteur)

