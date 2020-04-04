<?php require 'footer.php';

$p = 'home';
if(!empty($_GET['p'])) {
    $pagina = $_GET['p'];
    if(strpos($pagina, '.') === false) {
        if(file_exists('paginas/'.$pagina.'.php')) {
        	$p = $pagina;
        }
    }	    
}
require 'paginas/'.$p.'.php';

require 'header.php';