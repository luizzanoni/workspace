contador = 10

while True: 
    if contador < 10:
        contador = contador + 1
        if contador == 1:
            print(contador, "Item Limpo")
        else:
            print(contador ,"Itens Limpos")
    else:
        break

print ("Fim da repetição do bloco While")