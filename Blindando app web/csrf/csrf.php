<?php  
session_start();
if(!isset($_SESSION['csrf_token'])) {
	$_SESSION['csrf_token'] = md5(time().rand(0,999));
}

if (!empty($_POST['email'])) {
 	$email = $_POST['email'];
 	$senha = $_POST['senha'];

 	if($_POST['csrf_token'] == $_SESSION['csrf_token']) {
 		if($email == 'teste@hotmail.com' && $senha == '123') {
	 		echo "Acesso OK!";
	 	} else {
	 		echo "senha gay";
	 	}	
	 	echo '<hr/>';
 	}else {
 		echo 'para de safadeza muleke(a)';
 	}
 }
 ?>
<form method="POST">
   Email:<br>
   <input type="email" name="email"><br>
   Senha:<br>
   <input type="password" name="senha"><br><br>

   <input type="hiden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

   <input type="submit" value="enviar"><br>
</form>