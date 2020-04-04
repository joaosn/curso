<?php  

interface animal { //todo mentodo das inteface tem que ser publico
   public function andar(); //e não tem {} conteudo
}
class chachorro implements animal {
   
   public function andar () {
   	 echo "estou andando...";
   }
}

$cachorro = new Cachorro();
$cachorro->andar();
?>