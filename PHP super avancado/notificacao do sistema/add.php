<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_notificacao;host=localhost", "root","");
} catch (PDOException $e) {
	echo 'loko: '.$e->getMessage();
	exit;
}

$prop = array(
   'curtidor' => '2',
   'id_foto' => '123'
);

$sql = "INSERT INTO notificacao (id_user, notificacao_tipo,propriedades,link,) VALUES (:id_user, :tipo, :prop, :link)";
$sql = $pdo->prepare($sql);
$sql->bindValue("id_user","1");
$sql->bindValue(":tipo","Curtiu");
$sql->bindValue(":prop", json_encode($prop));
$sql->bindValue(":link","http://localhost/modulogit/curso/PHP%20super%20avancado/notificacao%20do%20sistema/");
$sql->execute();