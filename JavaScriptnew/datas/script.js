let d = new Date();

let ano = d.getFullYear(); // pegar ano
let mes = d.getMonth(); // pegar mes
var diaS = d.getDay(); // pegar dia da semana
let dia = d.getDate(); // pegar dia 
let hora = d.getHours(); // pegar horra
let min = d.getMinutes(); // pegar minutos
let dataatual = Date.now() // pega dadata atual en d.get para pegar d.set para setar...
d.setDate( d.setDate() + 5); // setar dia mais 5 dias a frente funciona com qaulquer func.

var diaS = 3;  //SWITCH
var dianome = '';


 switch(diaS) {
    case 1:
        dianome = 'segunda-feira';
        break;
    case 2:
        dianome = 'terça-feira';
        break;
    case 3:
        dianome = 'quarta-feira';
        break;
    case 4:
        dianome = 'quinta-feira';
        break;
    case 5:
        dianome = 'Sexta-feira';
        break;
    case 6:
        dianome = 'Sabado';
    case 7:
        dianome = 'domingo';
        break;
  };

console.log('hoje é dia'+dia+' do '+mes+' de '+ano+' e são '+hora+'horas e '+min+'min. numa linda '+dianome);
console.log(dataatual);


//Date() pega data atual e hora
// semana começa no domingo 
// numeros começa contando do 0.