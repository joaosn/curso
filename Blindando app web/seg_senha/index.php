<?php
//recomendção para senha do php
//$senha = password_hash("juliana", PASSWORD_BCRYPT); // gerando senha.
//echo $senha;

// $has = '$2y$10$4ZvzX4duVU1B9T14STlcYu3jzsjH859dVrsBSoCLYtHbHg78Ul8Ga';

// $senha = 'juliana';
// if(password_verify($senha,$has)) {
// 	echo "acertou";
// }else {
// 	echo "eroou";
// } //metodo  exclusivo do php n funciona pra verificar no banco 

$email = 'joão@gmail.com';
$senha = 'juliana';

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
$sql->bindValue(':email',$email);
$sql->execute();

if($sql->rowCount() > 0) {
	$dados = $sql->fetch();

	if(password_verify($senha, $dados['senha'])) {
		echo "acertou";
	}else {
		echo "erou";
	}
}