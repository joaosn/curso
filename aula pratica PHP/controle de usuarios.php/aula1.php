<?php  
require 'config.php';
?>
<a href="adicionar.php">Adicionar novo Usuário</a>
<table border="0px" width="100%">
   <tr>
	<th>nome</th>
	<th>E-mail</th>
	<th>açãos</th>
   </tr>
   <?php
    $sql = "SELECT * FROM usuarios2";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0) {
         foreach($sql->fetchAll() as $usuario) {
         	echo '<tr>';
            echo '<td>'.$usuario['nome'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td><a href="Editar.php?id='.$usuario['id'].'">Editar<a/>--<a href="excluir.php?id='.$usuario['id'].'">Excluir<a/></td>';
            
         	
         	echo '<tr>';
         }
    }

    ?>
</table>

