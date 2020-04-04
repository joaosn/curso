<?php  

class Pessoa {

  private $nome;
  private $idade;

  public function __construct($nome, $idade) {
      $this->nome = $nome;
      $this->idade = $idade;
  }

  public function getNome() {
  	return $this->nome;
  }

  public function getIdade() {
  	return $this->idade;
  }

}
class PessoaAdapter {
	private $sexo;
	private $Pessoa;

	public function __construct(Pessoa $Pessoa) {
       $this->Pessoa = $Pessoa;
	}

	public function setSexo($s) {
       $this->sexo = $s;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function getNome() {
		return $this->Pessoa->getNome();
	}
	public function getIdade() {
		return $this->Pessoa->getIdade();
	}
}

$pessoa = new Pessoa('joão',19);

$pa = new PessoaAdapter($pessoa);
$pa->setSexo("masculino");

echo "nome: ".$pa->getNome()."<br/>";
echo "Idade: ".$pa->getIdade()."<br/>";
echo "Sexo: ".$pa->getSexo()."<br/>";

?>