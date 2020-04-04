<?php 
if (!empty($_FILES['foto']['tmp_name'])) {
 
    if($_FILES['foto']['type'] == 'image/png') {
    	$nome = md5(rand(0,9999).time()).'.png';
	    move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome);

		echo "foto caregada com secesso";
    }else {
    	echo "selecionar uma foto valida pff";
    }

	
	
	
}