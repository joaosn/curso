$(function(){
	  $('button').on('click', function() {
            var nome =$('#nome').val();

	      $.ajax({
            url:'http://localhost/modulogit/curso/PHP%20super%20avancado/Ajax_mvc/ajax',
            type:'POST',
            data:{nome:nome},
            dataType:'json',
            success:function(r) {
            	$('.borda').html(r.frase);
            }
	      });
	  });
});