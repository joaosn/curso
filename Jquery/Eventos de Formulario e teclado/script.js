$(function(){
	
   $('#form').bind('submit', function(e){
        e.preventDefault();

       console.log("O formulario foi submitado!!");
    });

    $('#nome').bind('select', function(){
      console.log("Selecionaou...");
    });

    
    
    $('#nome, #email').bind('focus', function(){
       $(this).addClass('focado');
    });

    $('#nome, #email').bind('blur', function(){
       $(this).removeClass('focado'); // para desfocar ..!
    });
     
    

    $('#idade').bind('change', function(){
        console.log( $(this).val() );
    });

    

    $('#nome').bind('keydown', function(){
      console.log("Apertou tecla.."); 
    });
    
    

     $('#nome').bind('keyup', function(e){
      console.log(e.keyCode); // (e.keyCode) para saber qual tecla eu apertei
    });
     
    
    $('#nome').bind('keyup', function(e){
        if(e.keyCode == 13) {  //13 = enter
            var txt = $(this).val(); //para pegar oq meu digitos..
            console.log(txt);
            $(this).val('');
        }
    });


});

