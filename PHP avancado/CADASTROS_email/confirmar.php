<?php  
require 'config.php';
$h = $_GET['h'];

if(!empty($h)) {

	$pdo->query("UPDATE usuarios SET status = '1' WHERE md5(id) = '$h'");

	echo "<h2>cadastro comfirmado com sucesso!!</h2>";
}
?>