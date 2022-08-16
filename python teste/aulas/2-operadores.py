print("Olá, seja bem vindo! Calcule seu gasto anual.")

salario_mensal = input("Digite seu salário mensal: ")
salario_mensal = float(salario_mensal)

gasto_mensal = input("Digite seu gasto mensal: ")
gasto_mensal = float(gasto_mensal)

salario_total = salario_mensal * 12
gasto_total = gasto_mensal * 12

montante_economizado = salario_total - gasto_total
print("Seu saldo economizado foi um total de:", montante_economizado)
