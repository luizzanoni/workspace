programa
{
	
	funcao inicio(){
		real a,b, nota_a, nota_b
		escreva("Digite a nota p1 e p2 do aluno A ")
		leia (a)
		leia(b)
		escreva("Digite a nota p1 e p2 do aluno B ")
		leia(nota_a)
		leia(nota_b)

		escreva("A média do aluno A ", media_aluno(a,b))
		escreva("\nA média do aluno B ", media_aluno(nota_a,nota_b))
		}
		funcao real media_aluno(real nota_a, real nota_b){
			retorne(nota_a + nota_b +1)/2
		}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 420; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */