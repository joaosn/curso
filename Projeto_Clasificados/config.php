<?php
session_start();

global $pdo;
try {
  $pdo = new PDO("mysql:dbname=classificadoss;host=localhost", "root","");
} catch(PDOExcepition $e) {
	echo "falhou :".$e->getMessage();
}
?>