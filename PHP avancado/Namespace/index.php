<?php  
require 'sobre1.php';
require 'sobre2.php';

$sobre = new \aplicacao\v1\Sobre();

echo "vers�o : ".$sobre->getVersao();
?>