<form method="POST">
<h1>Inverter String</h1>
    Palavra ou frase:<br><br>
    <input type="text" name="p1">
    <input type="submit" name="enviar">
</form>
<?php  
if(!empty($_POST['p1']))  {
   $p1 = $_POST['p1'];

echo $p1.'<br>';
echo strrev($p1);

}

?>