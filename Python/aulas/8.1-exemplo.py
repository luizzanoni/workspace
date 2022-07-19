nome_cidade = input("Qual é a cidade do Brasil, conhecida como cidade maravilhosa?")
nome_cidade = nome_cidade.strip()
while nome_cidade.lower() != 'rio de janeiro' :
    print("Tenta de novo ai!")
    nome_cidade = input("Qual é a cidade do Brasil, conhecida como cidade maravilhosa?")

print("Boooa chefia!")