<?php  
if(isset($_POST['nome']) && !empty($_POST['nome'])) {
   
   $nome = addslashes($_POST['nome']);
   $email = addslashes( $_POST['email']);
   $msg = addslashes($_POST['msg']);

   $para = "jv.zyzz.legado2@gmail.com";
   $asunto = "pergunta";
   $corpo = "nome: ".$nome." - E-mail:".$email."- Mensagem: ".$msg;
   $cabecalho = "form: jv.zyzz.legado@gmail.com"."\r\n"."Reply-to: ".$email."\r\n"."X-mailer: PHP/".phpversion();

   mail($para,$asunto,$corpo,$cabecalho);

   echo "<h2>Seu E-mail foi enviado com sucesso!</h2>";
   exit;
}
?>
<form method="POST">

	Nome:<br>
	<input type="texto" name="nome"><br><br>

	E-mail:<br>
	<input type="email" name="email"><br><br>

	Mensagem:<br>
	<textarea name="msg"></textarea><br><br>

	<input type="submit" name="enviar">

</form>