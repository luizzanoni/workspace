// Aula de condições multiplas

// existe o comando 
// switch(expressão) {
//     case valor 1:
//          nana
//     break

//     case valor 2:
//          nana
//     break

//     case valor 3:
//          nana
//     break

//     default
//          nana
//     break 
// }

// caso não exista o break, ele entra em loop infinito


var agora = new Date()
var diaSemana = agora.getDay()
// Para o JS
// 0 - Domingo
// 1 - Segunda
// 2 - Terça
// 3 - Quarta
// 4 - Quinta
// 5 - Sexta
// 6 - Sábado
console.log(diaSemana)
// Podemos escrever com IF ELSE, porém demoramos demais, usamos o swicht
switch(diaSemana){
    case 0:
        console.log('Domingo')
        break
    case 1:
        console.log('Segunda')
        break
    case 2:
        console.log('Terça')
        break
    case 3:
        console.log('Quarta')
        break 
    case 4:
        console.log('Quinta')
        break
    case 5:
        console.log('Sexta')
        break
    case 6:
        console.log('Sábado')
        break
    default:
        console.log('[ERRO] dia não corresponde')
}

var diaSemana = 2
console.log(diaSemana)
switch(diaSemana){
    case 0:
        console.log('Domingo')
        break
    case 1:
        console.log('Segunda')
        break
    case 2:
        console.log('Terça')
        break
    case 3:
        console.log('Quarta')
        break 
    case 4:
        console.log('Quinta')
        break
    case 5:
        console.log('Sexta')
        break
    case 6:
        console.log('Sábado')
        break
    default:
        console.log('[ERRO] dia não corresponde')
}

