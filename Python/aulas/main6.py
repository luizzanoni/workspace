# Principal diferença de listas e tuplas, porém a tupla é a flexibilidade com o que a gente faz com cada dado
# na lista, a gente mexe e altera
# na tupla, a não altera nada apartir de escrita

# Declarando TUPLA

nomes_paizes = ('Brasil', 'Argentina', 'China', 'Canadá', 'Japão')
print(nomes_paizes, type(nomes_paizes))

len(nomes_paizes)

nomes_paizes[0]

b, a, c, ca, j = nomes_paizes

print(b, c, j)

print(*nomes_paizes)
