<?php  
  session_start();

if (isset($_POST['email'])  &&  empty($_POST['email']) == false) {
	$email=addslashes($_POST['email']);
	$senha=md5(addslashes($_POST['senha']));

	$dsn =  "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	   try {
		$db = new PDO($dsn, $dbuser, $dbpass);

		$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		if($sql->rowCount() > 0) {
			
          $dado = $sql->fetch();

          $SESSION['id'] = $dado['id'];

          header("location: aula2.php");
		}
	} catch(PDOException $e) {
	      echo "falhouuuuuuu: ".$e->getMessage();
	}
}
?>

<form method="POST">
	Nome:<br/>
    <input type="text" name="Nome"><br><br>
	E-mail<br/>
    <input type="text" name="email"><br><br>

	<input type="submit" value="cadastrar"/>
</form>