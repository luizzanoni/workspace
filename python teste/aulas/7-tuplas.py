# Principal diferença de listas e tuplas, porém a tupla é a flexibilidade com o que a gente faz com cada dado
# na lista, a gente mexe e altera
# na tupla, a não altera nada apartir de escrita

# Declarando TUPLA

nomes_paises = ('Brasil', 'Argentina', 'China', 'Canadá', 'Japão')
print(nomes_paises, type(nomes_paises))

len(nomes_paises)

nomes_paises[0]

b, a, c, ca, j = nomes_paises

print(b, c, j)

print(*nomes_paises)
