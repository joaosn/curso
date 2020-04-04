<?php
class Person {
	private $name;
	private $lastname;
	private $age;

	public function setName($n) {
        $this->name = $n;
        return $this;
	}
	public function setLasName($n) {
		$this->lastname = $n;
		return $this;
	}
	public function setAge($n) {
		$this->age = $n;
	}
	public function getFullName() {
		return $this->name.' '.$this->lastname.' = '.$this->age.' anos';
	}
}


$person = new Person();
$person->setName('joão')->setLasName('nascimento')->setAge(19);

echo "nome: ".$person->getFullName();