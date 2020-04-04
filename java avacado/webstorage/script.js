
if(typeof localStorage.nome == "undefined") {
	localStorage.nome = prompt("qual seu nome ?");
}

document.getElementById('info').innerHTML = localStorage.nome;