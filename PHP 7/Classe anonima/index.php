<?php 
// pre-php7
/*
class caro {

	public function getNome() {
		return "Carro 1.0";
	}
}
$carro = new Carro();
echo $carro->getNome();



//pos php7
$carro = new class {
   
   public function getNome() {
   	 return "Carro 2.0";
   }
};
echo $carro->getNome()." carro de gay";

function cria_carro() {
   return class {

   	 public function getName() {
   	 	return "carro 3.0";
   	 }
   };
}

$carro = cria_carro();
echo $carro->getName();
*/
class automovel {
	private $carro;

	public function setCarro($carro) {
		$this->carro = $carro;
	}

	public function getName() {
		return $this->carro->getName();
	}
}

$a = new automovel();
$a->setCarro(new class {
	public function getNome() {
		return "carro gay";
	}
});
echo $a->getName();