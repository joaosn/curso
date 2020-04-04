<?php require 'pages/header.php';  ?>
<div class="container">
     <h1 class="cas">Cadastre-se</h1>
     <?php
     require 'classes/usuarios.class.php';
     $u = new Usuarios();
     if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = ($_POST['senha']);
        $tel = addslashes($_POST['telefone']);

        if(!empty($nome) && !empty($email) && !empty($senha)) {
             if($u->Cadastrar($nome,$email,$senha,$tel)) {
                   ?>
        	       <div class="alert alert-success">
        	       Usuario cadastrado com Suseceso!!!<a href="login.php" class="alert-link">Fazer login agora</a>
                   </div>
                   <?php
             } else {
             	 ?>
        	       <div class="alert alert-danger">
        	      Este Usuario já existe!!!<a href="login.php" class="alert-link">Deseja fazer login agora?</a>
                   </div>
                   <?php
             }	
        } else {
        	?>
        	<div class="alert alert-warning">
        		Porfavor Prencha Todos os Campos!!!
        	</div>
        	<?php

        }
     	
     }
     ?>

     <form method="POST">
     	  <div class="form-grup add">
     	  	  <label for="nome">Seu nome:</label>
     	  	  <input type="text" name="nome" id="nome" class="form-control">
     	  </div>
     	  <div class="form-grup add">
     	  	  <label for="email">Seu Email:</label>
     	  	  <input type="email" name="email" id="email" class="form-control">
     	  </div>
     	  <div class="form-grup add">
     	  	  <label for="senha">Defina uma Senha:</label>
     	  	  <input type="password" name="senha" id="senha" class="form-control">
     	  </div>
     	  <div class="form-grup add">
     	  	  <label for="telefone">Seu Telefone:</label>
     	  	  <input type="text" name="telefone" id="telefone" class="form-control">
     	  </div>
     	  <input type="submit" value="Cadastrar" class="btn btn-default add">
     </form>	
</div>

<?php require 'pages/footer.php';  ?>