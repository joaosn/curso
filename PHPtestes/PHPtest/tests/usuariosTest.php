<?php

use PHPUnit\Framework\TestCase;

// teste de saida..
class UsuariosTest extends TestCase {

    public function testUserNome() {
        
        $this->expectOutputString('joão vitor nascimento da silva lindo(a)');

    	$user = new Usuario();
		$user->setNome('joão vitor');
		$user->setSobrenome('nascimento da silva');
	    echo $user->getNomeCompleto();
    }
    
    //teste incompletoo....
    public function testIdade() {
       
       /*
        $usuario = new Usuario();
        $usuario->setIdade(19);

        $this->assertEquals(19,$usuario->getIdade());
        */
        $this->markTestIncomplete('n deu tempo sextou!!! so implemtar class set e get' );
    }
	
}