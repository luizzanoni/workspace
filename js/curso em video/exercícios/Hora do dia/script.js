function carregar() {
    var msg = document.getElementById('msg')
    var img = document.getElementById('imagem')
    var data = new Date()
    var hora = data.getHours()
    // var hora = 20
    msg.innerHTML = `Agora são exatamente ${hora} horas!`
    if (hora >= 0 && hora < 12){
        img.src = 'img/manha.jpeg'
        document.body.style.background = '#e2cd9f'
    } else if (hora >= 12 && hora < 18) {
        img.src = 'img/tarde.jpeg'
        document.body.style.background = '#b9846f'
    } else {
        img.src = 'img/noite.jpeg'
        document.body.style.background = '#515154'
    }
}
