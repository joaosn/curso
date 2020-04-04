<?php 
if(isset($_FILES['foto'])) {

	$arq = $_FILES['foto'];

	move_uploaded_file($arq['tmp_name'], 'fotos/'.$arq['name']);

	echo "Arquivo de ".$_POST['nome']." enviado com exito!!!";
}

?>