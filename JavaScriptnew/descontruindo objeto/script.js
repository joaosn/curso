let pessoa = {
	nome: 'joão',
	sobrenome: 'nascimento',
	idade: 90, // se nao passar idade posso setar na hora 
	social:{
		facebook:'joaoloko',
		instagram: {
            url:'@joaoZ',
            seguidor:340
		}

	},
	nomeCompleto: function() {
		return `${this.nome} ${this.sobrenome}`;
	}
};

//let {nome:zyzz,sobrenome,idade = 67} = pessoa; // descontruir objeto pessoa

let { nome, idade, social:{instagram:{url:instagram}} } = pessoa;

console.log(instagram,nome,idade);
