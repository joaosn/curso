//eventos são reação a uma determinada ação;;
//tiopo defenir onclikc...
/*$(function () {
	$('button').click(function(){
      if($(this).hasClass('fundored')) {    //ESSE EVENTO DE CLIK ADD CLASS CLICOU DNV ELE TIRA
          $(this).removeClass('fundored');
      } else {
          $(this).addClass('fundored');
      }
	});

});  //posso fazer asim para tirar e ponha class nesse ex: ou asim

$(function () {
	$(this).toggleClass('fundored');

});


// evento mauseover como aplicar >>>
$(function(){

    $('button').mouseover(function(){
	   $(this).addClass('fundored');    //QUANDO PASSO MAUSE ADD CLASS...     
	});

	$('button').mouseout(function(){
	   $(this).removeClass('fundored');     
	});


});  //essa foi aula Definindo Eventos em Elementos DOM^^


//aula: EVENTOS AUXILIADORES ... >>>
$(function(){ // PODE SUBISTITUIR mouseover e mouseout ..

     $('button').hover(function(){
       $(this).addClass('fundored');  // SE USSAR .toogle passo apenas addclass.. 
     }, function(){
       $(this).removeClass('fundored');
     });
  
});


//aula: COMO REMOVER EVENTO.
$(function(){
	$('button').bind('click', function() {  //.bind melhor jeito de add evento 
         alert('clicouuuuuuuuuuuuu');
	});
});

// para remover evento = "$('button').unbind('click');"... ou $('button').off('click');


//aula: add falso evento!!...
$(function(){
	$('#btn1').bind('click', function() {  
         $('#btn2').trigger('click'); //serve pra varias açãoes ex;marcar todos
	});

	$('#btn2').bind('click', function() {  
         alert('clicouuuuuuuuuuuuu2');
	});
});
//acionar evento sem clicar no botão basta dar $('button').trigger('click');
*/

//aula: propriedade padrão do evento 
$(function(){

   $('#botao').bind('click', function(e){ // passei letra 'e' junto com function para acessar propriedade interna do elemento!!
   	     e.preventDefault(); //previne ação padrao do obj en si no causo aki n deixa formulario ser enviado!!

   	     var txt = $('#nome').val();  
   	     alert(txt);
   });

});