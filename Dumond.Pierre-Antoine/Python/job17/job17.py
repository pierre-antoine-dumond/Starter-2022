def myFunction(*params):
    myList = []

    for param in params:
        if isinstance(param,(int)):
            myList.append(param)
        else:
            print("Error: Un paramètre n'est pas numérique")

    for element in myList:
        if element % 2 == 0:
            print(element)

myFunction(4,12,19,22,35,46,59,84,88,95,96,102)
