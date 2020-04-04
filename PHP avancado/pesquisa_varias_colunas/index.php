<h1>Digite E-mail ou CPF do Usuario</h1>
<form method="$_GET">
	<input type="texte" name="campo"><br><br>
	<input type="submit" value="pesquisar">
</form>
<br>
<hr>
<?php 
if(!empty($_GET['campo'])) {
	$campo = $_GET['campo'];

	try {
		$pdo = new PDO("mysql:dbname=projeto_pesquisacolunas;host=localhost","root","");
	} catch(PDOException $e) {
		 echo "ERRO: ".$e->getMessage();
		 exit;
	}

	$sql  = "SELECT * FROM usuario WHERE (email = :email) OR (cpf = :cpf) OR (nome = :nome)";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email", $campo);
	$sql->bindValue(":cpf", $campo);
	$sql->bindValue(":nome", $campo);
	$sql->execute();

	if($sql->rowCount() > 0 ) {
		$sql = $sql->fetch();


		echo "NOME: ".$sql['nome'];
	} else {
		echo "n tem essa merda la nao";
	}
}
?>