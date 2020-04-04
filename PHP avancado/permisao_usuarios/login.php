<?php  
session_start();
require 'config.php';
require 'classes/usuarios.class.php';

if(!empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$senha = md5($_POST['senha']);

    $usuarios = new Usuarios($pdo);

    if($usuarios->fazerLogin($email, $senha)) {
         header("Location: index.php");
         exit;
    } else {
    	echo "usuario ou senha incoreto!!!";
    }
}
?>    
        <form method="POST">
	       <h1>login</h1>
	       E-mail:<br>
	       <input type="email" name="email"><br><br>

	       Senha:<br>
	       <input type="password" name="senha"><br><br>

	       <input type="submit" value="Entrar">
        </form>