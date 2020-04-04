<?php
//declare(strict_types=1);
/**
function somar(int $a, int $b):float { // int ou float ou string
	return  $a + $b; 
}

echo "Soma: ".somar(1,2);


  * 
  
 class Carro {
 	private $pdo;
 	function __construct(PDO $pdo) {
 		
 		$this->pdo = $pdo;
 	}
 } */
function saoIngual(int$a, int$b):bool {
	if($a == $b) {
		return true;
	} else {
		return false;
	}
}