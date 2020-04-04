<?php 
require 'class.php';

$olheiro = new UsuarioObserver();

$usuario = new Usuario("João");
$usuario->attach($olheiro);


echo "MEU nome é: ".$usuario->getName();
echo "<hr>";

$usuario->setName('zyzz');

echo "MEU nome é: ".$usuario->getName();
echo "<hr>";

//$usuario->detach($olheiro);
$usuario->setName('huga');

echo "MEU nome é: ".$usuario->getName();
echo "<hr>";