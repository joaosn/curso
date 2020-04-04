<?php  
try {
	$pdo = new PDO("mysql:dbname=saas;host=localhost","root",""); 
} catch(PDOException $e) {
	echo "falhouuu".$e->getMessage();
}

$dominio = $_SERVER['HTTP_HOST'];
echo "DOMINIO".$dominio;