// criando objeto e usando ele

function Animal() {
	this.raca = "cão";
	this.nome = "pingo"; //propriedades do meu obejeto.
	this.idade = 155;
	this.peso = 10;

	this.fazerXixi = function() {
		console.log("xiiiiiii..........");
	} 
	                          //acão do meu objetos;
	this.comer = function(kg) { 
		for(var i=0;i<kg;i++) {
			this.mastigar();
		}
        console.log("humm........");
        this.peso = this.peso + (kg/2);
	}

	this.mastigar = function() {
		console.log("nhoc.....nhoc...");
	}

}

var pingo = new Animal();
pingo.raca = "cachorro vira-lata"  //posso trocar deiniçao da caracteristicas do meu objeto;
pingo.nome = "pingo";
pingo.comer(10);
var lorro = new Animal();
lorro.raca = "aves";
lorro.nome = "lorro";
