<?php  
class Calculadora {

	private $n;

	public function __construct($numeroInicial) {
         $this->n = $numeroInicial;
	}

	public function somar($n1) {
		$this->n += $n1;
		return $this;
	}
	public function subtrair($n1) {
		$this->n -= $n1;
		return $this;
	}
	public function multiplicar($n1) {
		$this->n *= $n1;
		return $this;
	}
	public function dividir($n1) {
		$this->n /= $n1;
		return $this;
	}

    public function resultado() {
    	return $this->n;
    }
}

$calcule = new Calculadora(10);
$calcule->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
$resultado = $calcule->resultado();

echo "resultado é: ".$resultado;