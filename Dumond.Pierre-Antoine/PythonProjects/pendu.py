import random
# def length(liste):
#     nbr = 0
#     for i in liste :
#         nbr = nbr + 1
#     return nbr

mots = [""]

with open ("dico_france.txt","r", encoding="ISO-8859-1") as f:
    for l in f:
        mots.append(l.rstrip("\n"))
mot = random.choice(mots)
print(mot)
# nbr_lettre = length(list(mot))
# #print (nbr_lettre)

choix = int(input ("choisissez votre niveau : \n 1 debutant \n 2 intermediaire \n 3 expert \n1, 2 ou 3 ? "))

if choix == 1:
    
    tentatives = 10

    affichage = ""
    for l in mot:
        affichage = affichage + "_ "

    lettres_trouvees = ""

    while tentatives>0:
        print("Mot à deviner : ", affichage)
        proposition = input("proposez une lettre : ")
        if proposition in mot:
            lettres_trouvees = lettres_trouvees + proposition
            print("-> Bien vu!")
        else:
            tentatives = tentatives - 1
            print("-> Nope. Il vous reste", tentatives, "tentatives")

        affichage = ""
        for x in mot:
            if x in lettres_trouvees:
                affichage += x + " "
            else:
                affichage += "_ "

        if "_" not in affichage:
            print(">>> Gagné! <<<")
            break
    print("    * Fin de la partie *    ")

elif choix == 2 :
    tentatives = 7

    affichage = ""
    for l in mot:
        affichage = affichage + "_ "

    lettres_trouvees = ""

    while tentatives>0:
        print("Mot à deviner : ", affichage)
        proposition = input("proposez une lettre : ")
        if proposition in mot:
            lettres_trouvees = lettres_trouvees + proposition
            print("-> Bien vu!")
        else:
            tentatives = tentatives - 1
            print("-> Nope. Il vous reste", tentatives, "tentatives")

        affichage = ""
        for x in mot:
            if x in lettres_trouvees:
                affichage += x + " "
            else:
                affichage += "_ "

        if "_" not in affichage:
            print(">>> Gagné! <<<")
            break
    print("    * Fin de la partie *    ")

elif choix == 3 :
    tentatives = 4

    affichage = ""
    for l in mot:
        affichage = affichage + "_ "

    lettres_trouvees = ""

    while tentatives>0:
        print("Mot à deviner : ", affichage)
        proposition = input("proposez une lettre : ")
        if proposition in mot:
            lettres_trouvees = lettres_trouvees + proposition
            print("-> Bien vu!")
        else:
            tentatives = tentatives - 1
            print("-> Nope. Il vous reste", tentatives, "tentatives")

        affichage = ""
        for x in mot:
            if x in lettres_trouvees:
                affichage += x + " "
            else:
                affichage += "_ "

        if "_" not in affichage:
            print(">>> Gagné! <<<")
            break
    print("    * Fin de la partie *    ")

else:
    print ("nous n'avons pas compris votre choix")
