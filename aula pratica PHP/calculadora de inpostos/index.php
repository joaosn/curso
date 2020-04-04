<form method="POST">
	<h1>calculadora de impostos</h1>
	<br>
	<h2>valor do produto:</h2>
	<input type="number" name="valor">
	<br><br>
	<h2>Taxa de imposto(em %):</h2>
	<input type="number" name="por"><br><br>

	<input type="submit" name="enviar">
</form>

<?php 
if(!empty($_POST['valor']) && !empty($_POST['por'])) {
	
	$valor = floatval($_POST['valor']);
	$por  = $_POST['por'];
	$im = (($por/100)*$valor); 
    $sem = $valor - $im;

    echo "valor do produto: R$ ".$valor."<br>";
    echo "taxa de imposto: ".$im."%<br>";
    echo "<hr>";
    echo "imposto: R$ ".$im."<br>";
    echo "produto: R$ ".$sem."<br>";

} 

?>