<?php  // ligar com banco de dados
if(!empty($_GET['id'])) {
	$id = intval($_GET['id']);

	$sql = "UPDATE usuarios  SET status = '0' WHERE id = :id";
	$sql = $pdo->prepare($sql);
	$sql->bindvalue(":id",$id);
	$sql->execute();


}
header("location: index.php");
	exit;
?>