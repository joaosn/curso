// function adicionar (...numeros) { // consigo receber varios dados do usuarios mesmo sem saber quantos ele vai mandar ss
   
//    console.log(numeros);
// }

// console.log(1,2,3,45,56,7,68,89,89);
function add(nomes,...novonomes) {
	let n = [...nomes,...novonomes]; //asim eu aproveito nomes + nomes q usuario mandar.
	return n; 
}

let nomes = ['joão','paulo'];

let out = add(nomes,'laisla','vitle','vinice','hugo');

console.log(out);

