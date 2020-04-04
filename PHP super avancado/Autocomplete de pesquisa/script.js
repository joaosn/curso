$(function() {
	
   $("#busca").on('keyup', function(){
       var texto = $(this).val();


       $.ajax({
           url:'buscar.php',
           type:'POST',
           data:{texto:texto},
           success:function(html) {
           	  $('#resultado').html(html);
           }
       });
   });

});