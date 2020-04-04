<?php

require "class.php";

$produtos = new Produtos();
$produtos->getLista();

$produtos->setOutput(new ArrayOutput());
$data = $produtos->getOutput();

print_r($data);

?>