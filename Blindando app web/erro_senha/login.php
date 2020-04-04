<?php  
session_start();

 if (!empty($_POST['email'])) {
 	$email = $_POST['email'];
 	$senha = $_POST['senha'];

 	if(isset($_SESSION['erro']) && $_SESSION['erro'] >= 3) {
 		echo "seu acesso esta bloqueado!";
 	} else {

	 	if($email == 'teste@hotmail.com' && $senha == '123') {
	 		echo "Acesso OK!";
	 	} else {
	 		if(!isset($_SESSION['erro'])) {
	 			$_SESSION['erro'] = 0;
	 		}
	 		    $_SESSION['erro']++;
	 		echo "usuario ou senha errado tentativas: ".$_SESSION['erro'];
	 	    }
        }
	 	echo '<hr/>';

 }
?>
<form method="POST">
   Email:<br>
   <input type="email" name="email"><br>
   senha:<br>
   <input type="password" name="senha"><br>

   <input type="submit" value="enviar">
</form>