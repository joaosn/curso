let lista = [
   {id:1, nome:'joão', sobrenome:'silva'},
   {id:2, nome:'Paulo', sobrenome:'lima'},
   {id:3, nome:'hugo', sobrenome:'xyz'}
];

let pessoa = lista.find(function(item){
    return (item.id == 3) ? true : false;
});
// lista2 = lista.map(function(item) {
// 	return item * 2;
// });
// lista2 = lista.every(function(item) {
// 	if(item < 20) {
// 		return true;
// 	} else
// 	    return false;
// });

let res = pessoa;



console.log(res);
                     
                     //.toSting() ajunta e trasforma en string.
                     //.join() separe por oq eu passar por parametro.
                     //.indexOf() pesquisa e retona a posição se n acha retorna -1
                     // .pop() remove ultimo item do array
                     // .shift() remove primero item do array
                     // .push() add novo item no array
                     // .splice(1,1) remove item do array ex: começando do index remova 1 item
                     // .sort() aruma o array em ordem alfabetica
                     // .reverse() inverte o array.
                     // .map(function()) vai rodar a function en todos item do array
                     // .filter(function()) essa retorna true ou false 
                     // .every(function()) tudo ou nada
                     // .some(function()) se tiver pelo menos um retorna ingual condição solicitada retornara true.
                     // .find(function()) 
