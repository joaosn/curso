<h1>Ordenador de numeros</h1>

<form method="POST">
	digite seus numeros:<br>
	<input type="text" name="nume"><br>
	<input type="submit" name="enviar">
</form>

<?php
if(!empty($_POST['nume'])) {
   $nume = $_POST['nume'];

   $novo = explode(" ", $nume);
   sort($novo);

   echo '<pre>';
   print_r($novo);
}
?>