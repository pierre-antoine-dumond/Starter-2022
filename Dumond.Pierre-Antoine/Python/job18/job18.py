def myFunction(*params):
    myList = []

    for param in params:
        if isinstance(param,(int)):
            myList.append(param)
            myList.sort()
        else:
            print("Error: Un des paramètres n'est pas numérique")
    print(myList)

myFunction(5,2,8,95,45,33,66,78,41,12,21)
