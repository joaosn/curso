// let telefone = '9';

// console.log(telefone.padEnd(9,'*'));



//.padEnd()  autocompleta casa n tenha quantidade minina passar dois paramentro on um vai ser quantida minina e outro oq vai completar
//.pad

let cartao = '123456789654';

let lastDigts = cartao.slice(-2);

let mask = lastDigts.padStart(12, '*');

console.log('este e seu carão? '+mask);