$(function(){

	var campo;
 
 $('input').bind('focus', function(){
     var pos = $(this).offset(); //me retorna um array proprieda left e hegth
     var width = $(this).width(); // pegar largura

     $('.escolha').css('left',pos.left+width+5);
     $('.escolha').css('top',pos.top);
     $('.escolha').show();

     campo = $(this);
 });

    $('input').bind('blur', function(){
      setTimeout(function(){
      	$('.escolha').hide();
      }, 200);
     

    });


    $('.escolha button').bind('click', function(){
       
       var hora = $(this).html();
       campo.val(hora);

    });


});