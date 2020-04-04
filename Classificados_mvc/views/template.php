<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assetes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assetes/css/style.css">

	<title>site</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
    	<div class="container-fluid">
    		<div class="navbar-header">
    			<a href="<?php echo BASE_URL; ?>" class="navbar-brand">GNDC</a>
                <a href="<?php echo BASE_URL; ?>" class="navbar-brand" style="font-size:15px; ">Home</a>
    		</div>
    		<ul class="nav navbar-bar navbar-right ">
                 <?php if(isset($_SESSION['clogin']) && !empty($_SESSION['clogin'])): ?>
                                      
                     <li class="lok1" style="color:#c6eebd; ">Bem vindo</li>
                     
                     <li class="lok"><a href="<?php echo BASE_URL; ?>anuncios">Meus anúcios</a></li>   
                     <li class="lok"><a href="<?php echo BASE_URL; ?>login/sair">Sair</a></li>
                 <?php else: ?>
    		         <li class="lok"><a href="<?php echo BASE_URL; ?>cadastrar">Cadastre-se</a></li>	
    		         <li class="lok"><a href="<?php echo BASE_URL; ?>login">Login</a></li>
                 <?php endif;  ?>
    		    	
    		</ul>
    	</div>
    </nav>
   
    <?php $this->loadViewInTemplate($viewName, $viewData);  ?>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assetes/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assetes/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assetes/js/script.js"></script>
	
</body>
</html>