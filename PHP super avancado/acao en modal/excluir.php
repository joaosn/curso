<?php 
 
 $pdo = new PDO("mysql:dbname=aula_modal;host=localhost","root","");
 $sql = $pdo->query("SELECT * FROM usuarios WHERE id = '$id'");

$id = $_POST['id'];

$pdo->query("DELETE FROM usuarios WHERE id = '$id'");