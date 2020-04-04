$(function() {
	
	$('#form').on('submit',function(e){
      e.preventDefault();

      var email = $('#ee').val();
      var senha = $('#ss').val();

          $.ajax({
            type:'POST',
            url:'login.php',
            data:{email:email, senha:senha},
            success:function(msg) {
                alert(msg);
            }
          });
    });
});