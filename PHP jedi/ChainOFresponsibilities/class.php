<?php  
class Carga {
	private $pesso;
	public function __construct($p) {
		$this->pesso = $p;
	}
	public function getPesso() {
		return $this->pesso;
	}
}
class Moto {
	private $sucessor;
	public function setSucessor($s) {
		$this->sucessor = $s;
	}
    public function transporte($carga) {
       if($carga->getPesso() <= 500) {
       	  echo "levo de motooo!..";
       } else {
       	  $this->sucessor->transporte($carga);
       }
    }   

}
class Caro {
	private $sucessor;
	public function setSucessor($s) {
		$this->sucessor = $s;
	}
    public function transporte($carga) {
       if($carga->getPesso() <= 5000) {
       	  echo "levo de carro!..";
       } else {
       	  $this->sucessor->transporte($carga);
       }
    }   

}
class Caminhao {
	private $sucessor;
	public function setSucessor($s) {
		$this->sucessor = $s;
	}
    public function transporte($carga) {
       if($carga->getPesso() <= 5000) {
       	  echo "levo de caminhão!..";
       } else {
       	  echo "LEVO DE BITREMMM......";
       }
    }   

}