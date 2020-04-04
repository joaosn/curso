<?php

class Usuario {
	private $nome;
	private $sobrenome;


	public function setNome($n) {
		$this->nome = $n;
	} 

	public function setSobrenome($n) {
		$this->sobrenome = $n;
	}

	public function getNomeCompleto() {
		return $this->nome.' '.$this->sobrenome.' lindo(a)';
	}

	public function setIdade($i) {
		$this->idade = $i;
	} 

	public function getIdade($i) {
		return $this->idade;
	}
}
