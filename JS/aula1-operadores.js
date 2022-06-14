function comparaNumeros(num1, num2) {
    const saoIguais = num1 === num2;
    const soma = num1 + num2;
    
    if(saoIguais) { //if e else normal dentro de uma função->
        return "São Iguais";
    }

    return "Não são Iguais";


    return saoIguais ? "São Iguais : "não são iguais";
}