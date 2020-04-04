<?php  
spl_autoload_register(function($class){

  require 'classes/'.$class.'.php';

});




$cavalo = new Cavalo();
$cavalo->andar();



//$cavalo = new pessoa();
//$cavalo->andar();
?>