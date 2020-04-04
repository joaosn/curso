// document.getElementById("titulo").innerHTML = "OPA, TUDO BOM";//alterando na pg em si
// document.write("Algum Texto");

// window.alert("gay"); //alterando na janela en si.

// console.log('para de ser feio menino'); 

// var hora = 9;
// if ( hora < 12) {
//     console.log("bomdia");
// } else if ( hora < 18) {
//     console.log("boa tarde");
// } else if ( hora <= 23) {
//     console.log("boa Noite");
// }

// var nome = "joão";
// let nome = "joão";// apenas no scopo onde for definido na caixa de codico
// const nome ="joão";

// let carros = [ //variavel array posso guarda nela oq eu quiser!!! inclusive array dentro de array;;...,,...
//     'palio',
//     'camaro',
//     'lanborguni',
//     'corola',
//     function() {
//         console.log("funga...1....2.......3");
//     }
// ];

// let ingredientes = [
//     ['uva','laranja','pera'], //0 lenbrando que começa do 0
//     ['macaraão','feijao','batata'] //1
// ];

// console.log( ingredientes[1][0] ) //asim eu acesso array de massa nesse causo pegeui macarrão....



// let carro = { // objeto carro
//    nome:'luxo',
//    modelo:'corola',
//    peso:'300kg',
//    ligar:function() {
//        console.log('vru.....vrummm');
//    }
// // };

// let dia = 3;  //SWITCH
// let dianome  = '';

//  switch(dia) {
//     case 1:
//         dianome = 'segunda-feira';
//         break;
//     case 2:
//         dianome = 'terça-feira';
//         break;
//     case 3:
//         dianome = 'quarta-feira';
//         break;
//     case 4:
//         dianome = 'quinta-feira';
//         break;
//     case 5:
//         dianome = 'Sexta-feira';
//         break;
//     case 6:
//         dianome = 'Sabado';
//     case 7:
//         dianome = 'domingo';
//         break; // default = se nei uma das exigencias for comprida usee esaa
//  }

//  document.getElementById("dia").innerHTML = "hoje é: " + dianome;
  
//for loop
//for loop array

// let texto = '';

// for(let i = 0; i < 50; i++) { // for LOOP
//    texto = texto + i + '<br/>'
// }

// let carro = [ 'ferrari','fusca','colora','palio']; // for LOOP ARRAY

// let html = '<ul>';

// for(let i in carro) {
//   html += '<li>'+ carro[i]+ '</li>';
// }

// html += '</ul>'

// document.getElementById("dia").innerHTML = html;

// WHILE 
let html = '';

let c = 0;

while(c < 10) {
  html += "Numero: "+c+"<br/>";
  c++; 
}

document.getElementById("dia").innerHTML = html;