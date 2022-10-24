choice = input("Bonjour, souhaites-tu JOUER ou voir les SCORES ? ")
score = 'nul'
if choice == 'Jouer' or choice == 'Jouer' or choice == 'jouer':
    player1 = input("Le pseudo du joueur 1:")
    player2 = input("Le pseudo du joueur 2:")
    print(player1, "Tu joues avec les X")
    print(player2, "Tu joues avec les O")
else:
    print(score)

row = 3 
col = 3
board = []
for i in range(row):
    board.append([0]*col)
    for j in range(col):
        board[i][j] = "-"
        print(board[i][j],end="")
    print()

row = int(input("Choisissez une coordonnée entre 0 et 2:"))
col = int(input("Choisissez une coordonnée entre 0 et 2:"))

for i_row, row in enumerate(board):
    for i_col, col in enumerate(row):
        board[i_row][i_col] = "X"
        print(board, end="")
