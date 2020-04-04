<?php
class Luz {
	private $status;
	public function ligar() {
		$this->status = 'on';
	}
	public function desligar() {
		$this->status = 'off';
	}
	public function getstatus() {
		return $this->status;
	}
}
class LuzOnComand {
	    private $luz;
	public function __construct(Luz $luz) {
		$this->luz = $luz;
	}
	public function execute() {
		$this->luz->ligar();
	}
}
class LuzOffComand {
     private $luz;
		public function __construct(Luz $luz) {
		$this->luz = $luz;
	    }
	public function execute() {
		$this->luz->desligar();
	}
}
function callComand($c) {
	$c->execute();
}