<?php 
 $pdo = new PDO("mysql:dbname=aula_modal;host=localhost","root","");
 $sql = $pdo->query("SELECT * FROM usuarios");
 $usuarios = $sql->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<title>Ação em Modal</title>
</head>
<body>
    <h1>Usuarios</h1>

    <table class="table">
    	<?php foreach ($usuarios as $user): ?>
    		<tr>
	    		<td scope="col"><?php echo $user['nome']  ?></td>
	    		<td scope="col"><?php echo $user['email']  ?></td>
	    		<td scope="col"><?php echo $user['senha']  ?></td>
	    		<td>
	    			<a href="javascript:;" onclick="editar('<?php echo $user['id'];  ?>');">Editar</a>
	    			<a href="javascript:;" onclick="excluir('<?php echo $user['id'];  ?>');">Excluir</a>
	    		</td>
    	    </tr>
    	<?php endforeach; ?>
    </table>

    <div id="modal" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-body">...</div>
    		</div>
    	</div>
    </div>
</body>
</html>