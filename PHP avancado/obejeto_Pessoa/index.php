<?php  
require 'pessoa.class.php';

$pessoa = new Pessoa('sintia', '02/10/1989');

echo $pessoa->getNome()." tem ".$pessoa->getIdade()." anos";
?>