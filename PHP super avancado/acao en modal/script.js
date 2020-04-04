function editar(id) {
	
	$.ajax({
      url:'editar.php',
      type:'POST',
      data:{id:id},
      beforeSend:function() {
          $('#modal').find('.modal-body').html('Carregando...');
          $('#modal').modal('show');
      },
      success:function(html) {
          $('#modal').find('.modal-body').html(html);
          $('#modal').modal('show');
          $('#modal').find('.modal-body').find('form').on('submit', Salvar);
      }
	});
}

function Salvar(e) {
    e.preventDefault();
            var nome = $(this).find('input[name=nome]').val();
            var email = $(this).find('input[name=email]').val();
            var senha = $(this).find('input[name=senha]').val();
            var id = $(this).find('input[name=id]').val();
        $.ajax({
              url:'salvar.php',
              type:'POST',
              data:{nome:nome, email:email, senha:senha, id:id},
              success:function() {
              	 alert("Salvo com Success");
              	 window.location.href = window.location.href;
              }
        });        
}

function excluir(id) {
	$('#modal').find('.modal-body').html('Tem certeza que deseja excluir o id '+id+'?<br/><button onclick="delluser('+id+')">Sim</button><button onclick="fechar()">Não</button>');
    $('#modal').modal('show');
} 


function fechar() {
	$('#modal').modal('hide');
}

function delluser(id) {
	    $.ajax({      
	          url:'excluir.php',
              type:'POST',
              data:{id:id},
              success:function() {
              	 window.location.href = window.location.href;
              }
        });        
}