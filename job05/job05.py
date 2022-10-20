x = int(input("Valeur 1 :"))
y = int(input("Valeur 2 :"))
for i in range(x+1, y, +1):
        print(i)
for i in range(x-1, y ,-1):
        print(i)
if x == y:
    print("Valeurs égales")
