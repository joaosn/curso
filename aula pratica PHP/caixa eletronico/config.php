<?php  
try {
   $pdo = new PDO("mysql:dbname=projeto_caixaeletronico;host=localhost", "root","");
   echo "fungo";
} catch(PDOExecption $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}
?>
