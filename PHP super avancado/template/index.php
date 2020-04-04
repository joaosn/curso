<?php
require 'template.php';

$array = array(
   "titulo" => "Titulo da pagina",
   "nome" => "joão",
   "idade" => 19
);

$tlp = new template('template.phtml');
$tlp->render($array);
?>

