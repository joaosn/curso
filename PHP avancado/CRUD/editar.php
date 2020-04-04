<?php  
include 'contato.class.php';
$contato = new contato();

if(!empty($_GET['id'])) {
   $id = $_GET['id'];

   $info = $contato->getInfo($id);

   if(empty($info['email'])) {
     header("location: index.php");
     exit;
   }
} else {
   header("location: index.php");
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
	<title>Editar mycrud</title>
</head>
<body>
<div class="container">
       <div class="title">
    	    <h1>Editar usuario mycrud</h1>
       </div>
    <form method="POST" action="editar_submit.php">
        <input type="hidden" name="id" value="<?php echo $info['id'];  ?>">
      <div class="form-group">
    	  <label for="nome">Nome:</label>
    	  <input id="nome" type="text" name="nome"  class="form-control" value="<?php echo $info['nome'];  ?>"> 
      </div>
      <div class="form-group">
    	  <label for="email">email:</label>
    	  <input id="email" type="email" name="email" class="form-control " value="<?php echo $info['email'];  ?>" > 
      </div>
        <div class="form-group">
    	    <input type="submit" value="Salvar" class="btn btn-primary">
        </div>
    </form>
</div>

</body>
</html>