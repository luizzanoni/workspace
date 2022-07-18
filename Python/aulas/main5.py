# Lista e Tuplas, porém esta é somente LISTAS, o arquivo main6.py é somente tuplas
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

lista_capitais = []
lista_capitais.append('Brasilia')
lista_capitais.append('Buenos Aires')
lista_capitais.append('Pequim')
lista_capitais.append('Bogotá')
print(lista_capitais)

lista_capitais.insert(2, "Paris")
print(lista_capitais)

lista_capitais.remove("Buenos Aires")
print(lista_capitais)

removido = lista_capitais.pop(2)
print(lista_capitais, removido)