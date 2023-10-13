var imgAtual = "https://media.tenor.com/_Yz-o5CqcukAAAAC/momodora-reverie-under-the-moonlight-cursed.gif"
var imgAnterior = "../img/img_home/momodora.avif"

 function trocar() {
    document.getElementById("gif").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}