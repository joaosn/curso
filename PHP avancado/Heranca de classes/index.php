<?php  
class Animal {
	public $nome;
	private $idae;
}

class Cavalo extends Animal {
	private $quantidade_de_patas;
	private $tipo_de_pelo;
}

class Gato extends Animal {
	private $quantidade_de_patas;
	private $miado;
}

$Cavalo = new Cavalo();
$Cavalo->nome = "gaucho";

echo "nome do meu cavalo é  ".$Cavalo->nome;
?>