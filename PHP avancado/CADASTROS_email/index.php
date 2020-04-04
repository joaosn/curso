<?php  
  if (isset($_POST['nome']) && !empty($_POST['nome'])) {
      $nome = addslashes($_POST['nome']);
      $email = addslashes($_POST['email']);

      require 'config.php';

      $pdo->query("INSERT INTO usuarios SET nome = '$nome', email = '$email'");
      $id = $pdo->lastInsertId();

      $md5 = md5($id);
      $link = "http://www.??????????.com.br/cadastroconfirma/confirmar.php?=".$md5;

      $asunto = "confirme seu cadastro";
      $msg = "clique no link para comfirmar\n\n".$link;
      $headers = "from: jv.zyzz.legado@gmail.com"."\n\n"."X-Mailer: PHP/".phpversion();
      
      mail($email, $asunto, $msg, $headers);

      echo "<h2>ok! comfirme seu cadastro!</h2> ";
      exit;

  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Cadastro</title>
</head>
<body>
<div class="container">
       <div class="title">
    	    <h1>cadastre-se aqui</h1>
       </div>
    <form method="POST" action="cadastro_submit.php">

      <div class="form-group">
    	  <label for="nome">Nome:</label>
    	  <input id="nome" type="text" name="nome" class="form-control"> 
      </div>
      <div class="form-group">
    	  <label for="email">email:</label>
    	  <input id="email" type="email" name="email" class="form-control"> 
      </div>
        <div class="form-group">
    	    <input type="submit" value="cadastrar" class="btn btn-primary">
        </div>
    </form>
    
</div>

</body>
</html>
