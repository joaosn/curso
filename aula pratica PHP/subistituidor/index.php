<form method="POST">
	<h1>subistituidor</h1>
	Frase:<br><br>
	
	<input type="text" name="frase"><br>
	Procurar por:<br><br>
	
	<input type="text" name="procurar"><br>
	Trocar por:<br><br>
	
	<input type="text" name="trocar"><br><br>
	<input type="submit" name="enviar">
</form>

<?php

if(!empty($_POST['frase'])) {
   $frase = $_POST['frase'];
   $procurar = $_POST['procurar'];
   $trocar = $_POST['trocar'];

 $novafrase = str_replace($procurar, $trocar, $frase);

 echo "frase é: ".$frase."<br>";
 echo "nova frase é :".$novafrase;
}
?>