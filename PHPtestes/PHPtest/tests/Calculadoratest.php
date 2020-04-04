<?php

use PHPUnit\Framework\TestCase;
// teste de varios testes 
class CalculadoraTest extends TestCase {

   /**
   * @dataProvider somaDataProvider
   */
   public function testSoma($n1,$n2, $esperado) {
   	  $calc = new Calculadora();
   	  $proc = $calc->soma($n1,$n2);
   	  $this->assertEquals($esperado, $proc);
   }
 
   public function somaDataProvider() {
    	 return array(
           array(1,1,2),
           array(20,10,30),
           array(-45,45,0),
           array(13.4,54.3,67.7)
    	 );
    }
}