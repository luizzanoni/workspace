import fractions


empresa = "Let's Code"
print(empresa)

# Ele vai dar erro
# empresa = 'Let's Code'
# print(empresa)

# Para quando vc necessita realizar uma sitação ou afins em um print
frase = "O professor Luiz disse: \"Hoje a pizza é por minha conta!\""
print(frase)

empresa = 'Google'
print(empresa[0])

empresa = 'Google'
print(empresa[:3])

nomes_paises = "Brasil, Argentina, China, Canadá, Japão"
nomes_paises = nomes_paises.split(', ')
print(nomes_paises)

# Quando você trás dados "sujos" da web ou página web
cabecalho = "      MENU PRINCIPAL              "
print(cabecalho.split())

nome_cidade = "rIo dE JaNeIrO"
print(nome_cidade.title())
print(nome_cidade.capitalize())
print(nome_cidade.lower())
print(nome_cidade.upper())