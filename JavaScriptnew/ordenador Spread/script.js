let nub = [1,2,3,4];

let nub2 = [...nub,4,5,6,7];

console.log(nub2); /// para continuar umm array ...


let info = {
	nome:'joão',
	sobrenome:'nascimento',
	idade:99
}

let infoN = {  // para continuar um obj.
	...info,
	cidade:'Douradina',
	estado:'parana',
	pais:'Brasil'
};

console.log(infoN);