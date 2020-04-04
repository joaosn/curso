<?php  
//CRUD

//create  criar
//read    ler
//update  atulizar 
//delete  deletar

include 'contato.class.php';

$contato = new contato();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assetes/css/style.css">
    <link rel="stylesheet" type="text/css" href="assetes/css/bootstrap.min.css">
    <script type="text/javascript" src="assetes/js/jquery.min.js"></script>
    <script type="text/javascript" src="assetes/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assetes/js/script.js"></script>
	<title>MY CRUD</title>
</head>
<body>
  <div class="container">
  	 <div class="table-responsive">
  	        <div class="tt">
  	        	<h1>Contatos</h1>
  	        </div>
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light">
                <tr>
        	      <th>ID</th>
        	      <th>NOME</th>
        	      <th>E-MAIL</th>
        	      <th>AÇÔES</th>
                </tr>
            </thead>
            <tbody>
            <?php  
            $lista = $contato->getAll();
            foreach($lista as $item):?>
             <tr>
             	 <td><?php echo $item['id'];  ?></td>
             	 <td><?php echo $item['nome'];  ?></td>
             	 <td><?php echo $item['email'];  ?></td>
             	 <td>
             	 	<a class="btn btn-primary modal_ajax" href="editar.php?id=<?php echo $item['id']; ?>" role="button">Editar</a>
             	 	<a class="btn btn-danger" href="excluir.php?id=<?php echo $item['id']; ?>" role="button">Excluir</a>
             	 </td>
             </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
         <div>
        <a class="btn btn-primary modal_ajax" href="adicionar.php" role="button">Adicionar novo usuario</a>
       </div>
</body>
</html>