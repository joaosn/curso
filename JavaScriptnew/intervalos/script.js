// let timer;

// function Comecar() {
// 	 timer = setInterval(showTime, 1000); // set tempo pra função rodar
// }

// function Parar() {
//      	clearInterval(timer);
// }

// function showTime() {
// 	let d = new Date();
// 	let h = d.getHours();
// 	let m = d.getMinutes();
// 	let s = d.getSeconds();

// 	let txt = h+':'+m+':'+s;

// 	document.querySelector('.demo').innerHTML = txt;
// }

//

let timer;
function rodar() {
	timer = setTimeout(function() {
	   document.querySelector('.demo').innerHTML = 'rodou!';
	},2000);
}
function parar() {
	clearTimeout(timer);
}