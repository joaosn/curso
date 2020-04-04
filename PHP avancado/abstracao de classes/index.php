<?php  
abstract class Animal {
	public $nome;
	private $idae;

  abstract protected function andar();

   public function setNome($n) {
         $this->nome = $n;
   }
   public function getnome() {
   	 return $this->nome;
   }
   
}

class Cavalo extends Animal {
	private $quatro_patas;
	private $tipo_do_pelo;

	public function andar() {

	}
}

$cavalo = new Cavalo();
$cavalo->setNome("gaucho");

echo "meu cavalo é o ".$cavalo->getNome();
?>