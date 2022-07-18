nomes_paises = ["Brasil", "Argentina", "China", "Canadá", "Japão"]
print(nomes_paises)

print('tamanho da lista:', len(nomes_paises))

print('Pais: ', nomes_paises[4])

print('Pais:', nomes_paises[-1])

# subistirui o pais na posição 4(japao) e foi sobreescrevido encima colombia
nomes_paises[4] = "Colômbia"
print('Pais:', nomes_paises[4])
print(nomes_paises)

# Fatiamento, acessando mais paises STEP
print(nomes_paises[1:3])
print(nomes_paises[1:-1])
print(nomes_paises[2:])
print(nomes_paises[:4])
print(nomes_paises[:])
print(nomes_paises[::2])
print(nomes_paises[::-1])
print(nomes_paises[::])
print("Brasil" in nomes_paises)
print("Brasil" not in nomes_paises)