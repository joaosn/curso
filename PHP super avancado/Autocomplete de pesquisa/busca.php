<?php  
try {
	$pdo = new PDO("mysql:dbname=autocompletar;host=localhost","root","");
} catch (PDOException $e) {
	echo "erro".$e->getMessage();
	exit;
}


if(!empty($_POST['texto'])) {
	$texto = $_POST['texto'];

	$sql = "SELECT * FROM pessoas WHERE nome LIKE :texto";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":texto",'%'.$texto.'%');
	$sql->execute();

	if($sql->rowCount() > 0) {

		foreach ($sql->fetchAll() as $pessoas) {
			echo $pessoas['nome']."<br>";
		}
	}
}