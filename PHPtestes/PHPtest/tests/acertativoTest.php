<?php

use PHPUnit\Framework\TestCase;

// teste acertativos
class AssertativoTest extends TestCase {
    
    public function testArray() {
    	//teste assertArrayHaskey procura nome ex; 'idade'

    	$a = new Assertativo();
    	$array = $a->getArray();

    	$this->assertArrayHaskey('idade',$array);
    }

    public function testCount() {
    	//teste assertCount verifica qauntos resultados dentro do array 

    	$a = new Assertativo();
    	$array = $a->getArray();

    	$this->assertCount(2,$array);
    }

    public function testEmpty() {
    	//teste assertEmpty verifica de array esta vazio se cheio da erro.

    	$a = new Assertativo();
    	$array = array();//$a->getArray();

    	$this->assertEmpty($array);

    }

    public function testCotain() {
    	// assertContains
    	$array = array(1,2,3,4,5);
      
      $this->assertContains(3, $array);
    //procura item no array ?... ex; numeros nomes etc...
    }

    public function testContainOnly() {
    	// assertContainsOnly
    	$array = array(1,2,3,4,5);

    	$this->assertContainsOnly('int',$array);
    	//verifica por tipo no array enviado ex:string ,int,array etc...
    }

    public function testAtrributoexist() {
    	//assertClassHasAttribute
    	$a = new Assertativo();

    	$this->assertClassHasAttribute('numeros', Assertativo::class);
    	// procura attributos especificos na class ex private numeros
    }

    public function testRegex() {
    	// assertRegExp
        
    	$this->assertRegExp('/^[a-z]{3}$/','bom');
    }

    //asserts direcionando a permisoes de diretorios se pasta existe se tem permisão de leitura etcc....segue os teste a abaixo!!!

    public function testDirExist() { //diretorio ou pastas como quiser chamar para ver se existe
      $this->assertDirectoryExists('classes');
    }

    public function testDirPermission1() { //testar permisão na pasta de ou ARQUIVO leitura
    	$this->assertDirectoryIsReadable('tests');

    }

    public function testDirPermission2() { //testar permisão na pasta de escrita OU ARQUIVO
    	$this->assertDirectoryIsWritable('tests');
    }

    public function testFileEquals() { //verifica se arquivo tem mesmA EXTENSÃO....
    	$this->assertFileEquals('lista.txt','listas2.txt');
    }

    // teste para verificar booleans 

    public function testBoolean() {
    	$this->assertTrue(is_file('lista.txt'));// retorna vdd 
    }

    public function testBoolean2() {
    	$this->assertFalse(is_file('teste'));// retorna falso 
    }

    public function testNull() {
       $idade = null;

    	$this->assertNull($idade);// espera resultado nulll
    }

    //public function testVarType() { // verifica se retorno e array mas esta depreciada

    //	$a = new Assertativo();

    //	$this->assertInternalType('array',$a->getArray());
    //}

    public function testEqual() {
       $nome = 	'joão';

       $this->assertEquals('joão',$nome);
    }

    public function testString() {
    	$texto = 'joão lindo supremo 18 anos';

    	$this->assertStringStartsWith('joã',$texto);
    	$this->assertStringEndsWith('anos',$texto);
    }
    
    public function testNumeros1() {
    	$usertotal = 20; 

    	//$this->assertGreaterThan(10, $usertotal);

    	$this->assertGreaterThanOrEqual(10, $usertotal);
    }

    public function testNumeros2() {
    	$usertotal = 20; 

    	//$this->assertLessThan(10, $usertotal);

    	$this->assertLassThanOrEqual(10, $usertotal);
    }

}