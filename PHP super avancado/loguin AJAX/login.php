<?php 
try {   
	$pdo = new PDO("mysql:dbname=projeto_loginajax;host=localhost","root","");
} catch(PDOException $e) {
	echo "falhouuu".$e->getMessage();
	exit;
}

if(isset($_POST['email']) && !empty($_POST['email'])) {

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email",$email);
	$sql->bindValue(":senha",md5($senha));
	$sql->execute();

	if($sql->rowCount() > 0) {
		echo "Usuarios logado com sucesso!!";
	} else {
		echo "erro senha oou email seu burro !!!";
	}
} else {
	echo "Digite email e senha pff!!!";
}