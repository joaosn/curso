<?php

//teste para verificar se ha errros
use PHPUnit\Framework\TestCase;

/**
* @expectedException PHPUnit\Framework\Error\Error


class ArquivoTest extends TestCase {
	
	public function testedefalha() {
		include'config.php';
	}
}
*/

//teste para verificar se o arquivo existe!!

class descobrir extends TestCase {
    public function testInclude() {
    	$this->assertTrue(
    	  file_exists('config.php')
    	);
    }
}