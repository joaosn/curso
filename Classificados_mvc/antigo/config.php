<?php
session_start();

global $pdo;
try {
  $pdo = new PDO("mysql:dbname=classificados;host=localhost", "root","");
} catch(PDOExcepition $e) {
	echo "falhou :".$e->getMessage();
}
?>