// Código pegando a hora exata do PC

var agora = new Date()
var hora = agora.getHours()
console.log(`Agora são exatemente ${hora} horas`)
if (hora < 12) {
    console.log('bom dia')
} else if (hora >= 18) {
    console.log('boa noite')
} else {
    console.log('boa tarde')
}

// Código que você coloca a hora
var hora = 15
console.log(`Agora são exatemente ${hora} horas`)
if (hora < 12) {
    console.log('bom dia')
} else if (hora >= 18) {
    console.log('boa noite')
} else {
    console.log('boa tarde')
}