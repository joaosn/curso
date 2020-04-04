
<h1>Sorteio</h1><br><br>
<?php
  $lista = explode("\n", file_get_contents('lista.txt'));
  $n = rand(0, count($lista)-1);

  echo "felizardo é: ".$lista[$n];
?>
