<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_notificacao;host=localhost", "root","");
} catch (PDOException $e) {
	echo 'loko: '.$e->getMessage();
	exit;
}

$sql = "SELECT * FROM notificacao WHERE id_user = '1'";
$sql = $pdo->query($sql);

if($sql->rowCont() > 0) {
	foreach ($sql->fetchAll() as $item) {
		
		$propriedades = json_decode($item['propriedades']);
		echo "Tipo: ".$item['notificacao_tipo']."<br>";
		
	}
}