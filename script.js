let total = 0

function adicionar(nome,preco){

let lista = document.getElementById("lista")

let item = document.createElement("li")

item.innerText = nome + " - R$ " + preco

lista.appendChild(item)

total += preco

document.getElementById("total").innerText = total.toFixed(2)

}

function limpar(){

document.getElementById("lista").innerHTML = ""

total = 0

document.getElementById("total").innerText = "0"

}

function finalizar(){

alert("Compra finalizada!")

limpar()

}