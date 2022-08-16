from pickle import TRUE
from fpdf import FPDF
pdf = FPDF ()
pdf.add_page()
pdf.set_font('arial')
# na fonte não coloquei o tamanho da letra pois quero que fique o mesmo do arquivo

# criando variáveis para receber o arquivo e o nome do arquivo
while True:
    arquivo = input(str('Digite o nome do arquivo e sua extenção->>> '))
    nome = input(str('Digite o novo nome do arquivo->>> '))
    with open(f'{arquivo}', 'r') as a:
        for i in a:
            t = f'{i}'
            pdf.cell(200,10, txt=f'{t}', border=0, fill=0, split_only=False)
    pdf.output(f'{nome}.pdf')
    exit = input(str('Deseja continuar[S/N] ->>> ?')).upper()
    if exit =='N':
        break