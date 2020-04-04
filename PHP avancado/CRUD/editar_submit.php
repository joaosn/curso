<?php  
include 'contato.class.php';
$contato = new contato();

if(!empty($_POST['id'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	if(!empty($email)) {
      $contato->editar($nome, $email, $id);
    }
    header("location: index.php");
}