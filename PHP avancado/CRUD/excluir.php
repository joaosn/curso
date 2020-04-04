<?php  
include 'contato.class.php';
$contato = new contato();

if(!empty($_GET['id'])) {
	
  $id = $_GET['id'];


  $contato->excluir($id);
}

	header("location: index.php");