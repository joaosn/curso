<?php require 'pages/header.php';  ?>
<div class="container">
     <h1 class="cas">Login</h1>
     <?php
     require 'classes/usuarios.class.php';
      $u = new Usuarios();
     if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = ($_POST['senha']);
        
       if($u->Login($email,$senha)) {
        ?>
           <script type="text/javascript">window.location.href="http://localhost/modulogit/curso/Projeto_Clasificados/meus-anucios.php";</script>
        <?php
       } else {
          ?>
                   <div class="alert alert-danger">
                      Usuario ou senha estão errados!!!
                   </div>
          <?php  
       }
     }
     ?>

     <form method="POST">
            
            <div class="form-grup add">
                 <label for="email">Seu Email:</label>
                 <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-grup add">
                 <label for="senha">Senha:</label>
                 <input type="password" name="senha" id="senha" class="form-control">
            </div>
            
            <input type="submit" value="Fazer Login" class="btn btn-default add">
     </form>   
</div>

<?php require 'pages/footer.php';  ?>