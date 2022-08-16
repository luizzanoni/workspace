print("Seja bem vindo, Calculadora de dinheiro para as passagens")

valor_passagem = 4.30
valor_corrida = input("Digite o valor da corrida da carona: ")

if float(valor_corrida) <= valor_passagem * 5:
    print("Pague a corrida da carona")
else:
    if float(valor_corrida) <= valor_passagem * 6:
        print("Aguarde um momento, o valor pode abaixar")
    else: 
        print("Pegue o Ônibus")