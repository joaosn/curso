<form method="POST">
	<h2>conversor de palavras en digitos</h2>
	<br>
	<input type="text" name="texto">
	<input type="submit" name="enviar">
	<br><br>
	<hr>
</form>

<?php
if(!empty($_POST['texto'])) {
	$texto = $_POST['texto'];
	$p = explode(",", $texto);

	$nums = array();

	foreach($p as $texto) {
		switch($texto) {
			case 'um':
				$nums[] = 1;
				break;
			case 'dois':
				$nums[] = 2;
				break;
			case 'três':
				$nums[] = 3;
				break;
			case 'quatro':
				$nums[] = 4;
				break;
			case 'cinco':
				$nums[] = 5;
				break;
			case 'seis':
				$nums[] = 6;
				break;
			case 'sete':
				$nums[] = 7;
				break;
			case 'oito':
				$nums[] = 8;
				break;
			case 'nove':
				$nums[] = 9;
				break;
		}
	}

	echo $texto."<br/>";
	echo implode(",", $nums);
}



?>
