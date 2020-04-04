<?php  
include 'contato.class.php';
$contato = new contato();

if(!empty($_POST['email'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
    
    $contato->adicionar($email, $nome);

    header("location: index.php");
}