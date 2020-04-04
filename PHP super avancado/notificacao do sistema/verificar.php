<?php  
try {
	$pdo = new PDO("mysql:dbname=projeto_notificacao;host=localhost", "root","");
} catch (PDOException $e) {
	echo 'loko: '.$e->getMessage();
	exit;
}

$sql = "SELECT * FROM notificacao WHERE id_user = '1' AND lido = '0'";
$sql = $pdo->query($sql);

$array = array('qt'=>0);

 if($sql->rowCount() > 0) {
    $array['qt'] = $sql->rowCount();

 }

 echo json_encode($array);
 exit;