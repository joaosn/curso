 <?php  
  try {
     $dsn = "mysql:dbname=blog;host=localhost";
     $dbuser = "root";
     $dbpass = "";
     $pdo = new PDO($dsn, $dbuser, $dbpass);

  } catch(PDOException $e) {
  	  die($e->getMessage());
  }
  /*
  1. calcular a quantidade  total de paginas.
  2. definir o $p.
  3. fazer a query com LIMIT
  */

   $qt_por_pg = 2;
  
   $total = 0;
   $sql = "SELECT COUNT(*) as c FROM posts";
   $sql = $pdo->query($sql);
   $sql = $sql->fetch();
   $total = $sql['c'];
   $paginas = $total / $qt_por_pg;
   
   $pg = '1';
   if(isset($_GET['p']) && !empty($_GET['p'])) {
   	   $pg = addslashes($_GET['p']);
   }

   $p = ($pg - 1) * $qt_por_pg;

   $sql = "SELECT * FROM posts LIMIT $p, $qt_por_pg";
   $sql = $pdo->query($sql);

  if($sql->rowCount() > 0) {
  	  foreach ($sql->fetchAll() as $item) {
  	  	  
  	  	  echo $item['id'].'-'.$item['titulo'].'<br>';
  	  }
  }
  echo "<hr>";
  for ($q=0;$q<$paginas;$q++) { 
  	echo '<a href="./?p='.($q+1).'">['.($q+1).' ]</a>';
  }
?>