<?php 
$PP = 'cache.cache';
if(file_exists('cache.cache') && is_valido($PP)) {
	require 'cache.cache';
} else {
	ob_start();
    require 'pagina.php';
    $pg = ob_get_contents();
    ob_end_clean();

    file_put_contents('cache.cache', $pg);
    echo $pg;
}

function is_valido($pp) {
	$ultima_modificacao = filectime($pp);
	$c = time() - $ultima_modificacao;

	if($c > 10) {
		return false;
	} else {
		return false;
	}
}



