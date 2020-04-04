<?php 
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Classificados</title>
	<link rel="stylesheet" type="text/css" href="assetes/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assetes/css/style.css">
    <script type="text/javascript" src="assetes/js/jquery.min.js"></script>
    <script type="text/javascript" src="assetes/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assetes/js/script.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    	<div class="container-fluid">
    		<div class="navbar-header">
    			<a href="./" class="navbar-brand">GNDC</a>
                <a href="./" class="navbar-brand" style="font-size:15px; ">Home</a>
    		</div>
    		<ul class="nav navbar-bar navbar-right ">
                 <?php if(isset($_SESSION['clogin']) && !empty($_SESSION['clogin'])): ?>
                 <?php require 'classes/usuarios.class.php';
                     $u = new Usuarios(); ?>                     
                     <li class="lok1" style="color:#c6eebd; ">Bem vindo <?=Usuarios::User($_SESSION['clogin']);?>
                         
                     </li>
                     <li class="lok"><a href="meus-anucios.php">Meus anúcios</a></li>   
                     <li class="lok"><a href="sair.php">Sair</a></li>
                 <?php else: ?>
    		         <li class="lok"><a href="cadastro.php">Cadastre-se</a></li>	
    		         <li class="lok"><a href="login.php">Login</a></li>
                 <?php endif;  ?>
    		    	
    		</ul>
    	</div>
    </nav>