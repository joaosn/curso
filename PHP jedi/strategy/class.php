<?php
Interface OutputInterface {
	public function load($array);
}

class JsonOutput implements OutputInterface {
	public function load($array) {
        return json_encode($array);
	}
}
class ArrayOutput implements OutputInterface {
	public function load($array) {
        return $array;
	}
}

class Produtos {

 private $array;
 private $output;

	public function getLista() {
		//.......SQL
        $this->array = array(array('nome' =>"joao"),array('nome' =>"zyzz"));
	}
public function setOutput(OutputInterface $outputType) {
      $this->output = $outputType;
}

public function getOutput() {
  return $this->output->load($this->array);
}

}