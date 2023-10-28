var imgAtual = ["https://media.tenor.com/_Yz-o5CqcukAAAAC/momodora-reverie-under-the-moonlight-cursed.gif", "https://media.tenor.com/PS9aSg4IFlsAAAAd/celeste-2d-platformer.gif"]
var imgAnterior = ["../img/img_home/momodora.avif", "../img/img_home/celeste.png"]

function trocar() {
    document.getElementById("gif").src = imgAtual[0];
    let aux = imgAtual[0];
    imgAtual[0] = imgAnterior[0];
    imgAnterior[0] = aux;
}

function trocar2() {
    document.getElementById("gif2").src = imgAtual[1];
    let aux = imgAtual[1];
    imgAtual[1] = imgAnterior[1];
    imgAnterior[1] = aux;
}