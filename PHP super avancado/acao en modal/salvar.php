<?php 
 
 $pdo = new PDO("mysql:dbname=aula_modal;host=localhost","root","");
 $sql = $pdo->query("SELECT * FROM usuarios WHERE id = '$id'");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$pdo->query("UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', id = '$id'");