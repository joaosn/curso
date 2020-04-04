<?php 
  session_start();
  require 'config.php';

  if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false) {
  	$id = $_SESSION['banco'];

    $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $sql->bindValue(":id",$id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $info = $sql->fetch();
     } else {
       header("Location: login.php");
       exit;
     }

  } else {
  	header("Location: login.php");
  	exit;
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Caixa eletronico</title>
</head>
<body>
    <h1>Ourobank</h1>
    Titular: <?php echo $info['titular'];  ?>
     <br>
    Agencia:<?php echo $info['agencia']; ?>
     <br>
    conta:<?php echo $info['conta']; ?>
     <br>
    Saldo:<?php echo $info['saldo'];  ?>
     <br>
    <a href="sair.php">sair</a>
    <hr>
    <h3>Movimenta�oes/extratos</h3>

    <a href="add-transacao.php">nova transa��o</a>
    <br><br>

    <table border="1"  width="400">
       <tr>
         <th>Data</th>
         <th>valor</th>
       </tr>
       <?php
       $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
       $sql->bindValue(":id_conta", $id);
       $sql->execute();

       if($sql->rowCount() > 0) {
           foreach ($sql->fetchAll() as $item) {
             ?>
              <tr>
                 <td><?php echo date('d/m/y H:i',srttotime($item['data_operacao'])); ?></td>
                 <td> 
                  <?php
                    if($item['tipo'] == '0'):?>
                    <span color="green">R$ <?php echo $item['valor']; ?></span>
                    <?php else: ?>
                    <span color="red">- R$ <?php echo $item['valor']; ?></span>
                    <?php endif; ?> 
                  </td>
              </tr>

             <?php
           }
       }

       ?>
    </table>
</body>
</html>