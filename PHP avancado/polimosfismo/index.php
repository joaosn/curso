<?php  

class animal {
	public function getNome() {
		echo "getNome da classe animal";
	}
	public function testas() {
		echo "to testando nessa porra";
	}
}
class cachorro extends animal {
    public function getNome() {
    	$this->testas();
    }

}

$cachorro = new cachorro();
$cachorro->getNome();
?>