<?php  
session_start();
require 'config.php';

$_SESSION['lg'];

  if(empty($_SESSION['lg'])) {
  	header("Location: login.php");
  	exit;
  } else {
  	$id = $_SESSION['lg'];
  	$ip = $_SERVER['REMOTE_ADDR'];

  	$sql = "SELECT * FROM usuarios WHERE id = :id AND ip = :ip";
  	$sql = $pdo->prepare($sql);
  	$sql->bindValue(":id",$id);
  	$sql->bindValue(":ip",$ip);
  	$sql->execute();

  	if($sql->rowCount() == 0) {
  	header("Location: login.php");
  	exit;
  	}
  }
?>
<h1>Conteudo secreto....!</h1>