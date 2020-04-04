<?php
//psr-0
/*spl_autoload_register(function ($class) {
 $file = 'classes/'.$class.'.php';
 if(file_exists($file)) {
 	require($file);
 }

});

$joao = new Joao;
echo "idade: ".$joao->getIdade();
*/

spl_autoload_register(function ($class) {
    $base_dir = __DIR__.'/pacotes/';
    
    $file = $base_dir.str_replace('\\','/', $class).'.php';

    if(file_exists($file)) {
    	require($file);
    }



//teorioa
//Vendor name
// subnamespace

});

