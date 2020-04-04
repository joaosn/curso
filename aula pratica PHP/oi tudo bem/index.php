<form method="POST" >

<h2>Qual seu nome?</h2>
<input type="text" name="nome">
<input type="submit" name="enviar">

</form>
<?php 
if(!empty($_POST['nome'])) {
    
    echo $_POST['nome'].' melhor jogador de FF';
}
  ?>