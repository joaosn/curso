 <?php
 try {
   $pdo = new PDO("mysql:dbname=projeto_rating;host=localhost","root","");
} catch(PDOException $e) {
    echo "falhou: ".$e->getMessage();
    exit;
}

 $sql = "SELECT * FROM filmes";
 $sql = $pdo->query($sql);
 if($sql->rowCount() > 0) {
 	foreach ($sql->fetchAll() as $filme): 
    ?>
    <fieldset>
    	<strong>
    		<?php echo $filme['titulo']; ?><br>
    	</strong>
    	<a href="votar.php?id=<?php echo $filme['id']; ?>&voto=1"><img src="star.png" height="20"></a>
    	<a href="votar.php?id=<?php echo $filme['id']; ?>&voto=2"><img src="star.png" height="20"></a>
    	<a href="votar.php?id=<?php echo $filme['id']; ?>&voto=3"><img src="star.png" height="20"></a>
    	<a href="votar.php?id=<?php echo $filme['id']; ?>&voto=4"><img src="star.png" height="20"></a>
    	<a href="votar.php?id=<?php echo $filme['id']; ?>&voto=5"><img src="star.png" height="20"></a>
    	(<?php echo $filme['media'];  ?>)
    </fieldset>
 	<?php endforeach; 
 } else {
    echo "não ha filmes cadastrado!";
}