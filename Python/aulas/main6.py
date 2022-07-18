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