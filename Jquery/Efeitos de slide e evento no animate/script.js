$(function() {
	/*
	$('.div').slideUp(); // faz minha div subir..!!
	$('.div').slideDown();// faz deçer ;;..! 
	$('.div').slideToggle(); // faz os 2 sobe deçe posso usar fast/slow...
    

    $('.botao').bind('click', function(){
       $('.div').slideToggle('fast');
    });*/ 

    $('.hellobar').bind('click', function(){
       $(this).slideUp();
    });
    
    $('.botao').bind('click', function(){
        
        $('.div').animate({
          'margin-left':100, //+= para add mais somar posiçao atual
          'margin-top':20,
          'width':500,
          'border-radius':75,
          'top':50
        }, {
          duration:1500,
          step:function(){
              console.log("nova etaapa....");
          },
          complete:function(){
            console.log("animaçao finalizada!...");
          },
          start:function(){
            console.log("animaçao começou!....");
          }
           
        }); // para fazer animaçoes usar .animate com parametros
    });//.stop() para parar animacão criar uma açao..

});