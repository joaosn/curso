<?php  
require 'class.php';

$carga = new Carga(1500);

$moto = new Moto();
$carro = new Caro();
$caminhao = new Caminhao();

$moto->setSucessor($carro);
$carro->setSucessor($caminhao);

$carro->transporte($carro);

?>