<?php
 $dsn = "mysql:dbname=blog;host=localhost";
 $dbuser ="root";
 $dbpass ="";

 try {
 	$pdo = new PDO($dsn, $dbuser, $dbpass);

 	 echo "ta fungano";
 	

 } catch (PDOException $e) {
 	echo "falhou a conexão: ".$e->getMessage();

 }

  ?>