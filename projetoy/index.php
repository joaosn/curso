<?php /*     //seguran�a da informa��o//

$autor = addcslashes($_POST["autor"]);

$sql = "SELECT * FROM posts WHERE autor = '$autor'";

?>


<?php  //ses�o appenas navegador aberto.
 session_start();

 $SESSION["teste"] = "jo�o lacerda";

 echo "vc fez ses�o"

  ?>
<br>
<br>
  <?php //cokie ate dps do navegador fechado

setcookie("meuteste", "fulanogay", time()+3600);
  echo "ta fungandoo"

   ?>

   <?php 

echo "meu cookie � de: ".$_COOKIE["meuteste"];

    ?>


<br>
<br>
*/
//liga��o com banco de dados 
//para baixo

?>

<?php  

 $dsn = "mysql:dbname=blog;host=localhost";
 $dbuser ="root";
 $dbpass = "";

 try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = 'gomes';
    $email = 'sintia@gmail.com';
    $senha = md5("1234");

      $sql = "INSERT usuarios2 SET nome = :nome, email = :email, 
      senha = :senha" ;

      $sql = $pdo->prepare($sql);

        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);

        $sql->execute();

    echo "usuario atualizado!: ";

  } catch(PDOException $e) {
     echo "falhou: ".$e->getMessage();
  }
 //fim com algo extra 
?>