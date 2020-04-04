<?php  
class Caracter  {
	private $propriedades;

	public function setPropriedade($pnome,$pvalue) {
		$this->propriedades[$pnome] = $pvalue;
	}
	public function getpropriedade() {
		return $this->propriedades;
	}
}
 Interface BuilderInterface {
     public function cara();
     public function criarBoots();
     public function criarluvas();
     public function criarPower();
     public function getCara();
}
class MarioBuilder implements BuilderInterface {
	private $cara;
	public function cara() {
       $this->cara = new Caracter();
	}
     public function criarBoots() {
       $this->cara->setPropriedade("helmet", "red");
     }
     public function criarluvas() {
     	$this->cara->setPropriedade("lefthand","clover");
     	$this->cara->setPropriedade("righthand","clover");
     }
     public function criarPower() {
     	$this->cara->setPropriedade("leftfoot","black boot");
     	$this->cara->setPropriedade("rightfoot","black boot");
     }
     public function getCara() {
     	return $this->cara;
     }
} 
class Diretor {
	public function build(BuilderInterface $builder) {
        $builder->cara();
        $builder->criarBoots();
        $builder->criarluvas();
        $builder->criarPower();
        return $builder->getCara();
	}
}

$mario = (new Diretor())->build(new MarioBuilder());

print_r($mario->getpropriedade());