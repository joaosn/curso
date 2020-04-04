function acao() {
	document.write("Execultou...<br/>");
}

//setInterval(acao, 2000); tempo por segundo sem para;
//setTimeout(acao, 2000); Execulta uma unica vez...;

// se eu defenir meu setInterval em uma varialvel posso controlar ele;
var time = setInterval(acao, 2000);
//clearInterval(time); eu usso essa função e passo minha variavel q ponhei no setInterval;
//o mesmo serve parra setTimeout;