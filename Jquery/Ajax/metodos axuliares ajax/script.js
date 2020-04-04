$(function(){
	
   $('button').bind('click', function(){
      
      //$('.div').load("teste.html"); //metodo axuliar ajax .load(qual endereço?)
      $.post("teste.html", function(t){ // $.get so trocar
          $('.div').html(t);
      });
   });

});