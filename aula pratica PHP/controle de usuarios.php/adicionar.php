<?php 
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false) { 
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));
	
	$sql = "INSERT INTO usuarios2 SET nome = '$nome', email = '$email', senha ='$senha'";
	$pdo->query($sql);

	header("Location: aula1.php");
 }
 ?>
<form method="POST">
	Nome:<br/>
    <input type="text" name="Nome"><br><br>
	E-mail<br/>
    <input type="text" name="email"><br><br>
	senha:<br/>
    <input type="password" name="senha"><br><br>

	<input type="submit" value="cadastrar"/>
</form>
