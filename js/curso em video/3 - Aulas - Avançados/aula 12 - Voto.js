// <!-- Condições aninhadas,é uma condição dentro de outra condição elseif -->

// var idade = 15
// if (idade < 18) {
//     console.log('Menor de idade')
// } else{
//     console.log('Maior de idade')
// }

var idade = 16
console.log(`Você tem ${idade} anos`)
if (idade < 16) {
    console.log('não vota')
} else if (idade < 18 || idade >= 65) {
    console.log('voto não obrigatório')
} else {
    console.log('voto obrigatório')
}