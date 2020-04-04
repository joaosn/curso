<?php
$array = array('nome'=>'joão', 'idade'=>19);
//ante do php7
//if(isset($array['idade'])) {
//	$idade = $array['idade'];
//} else {
//	$idade = '';
//}
//ou
//$idade = (isset($array['idade']))? $array['idade'] : '';

//php7

$idade = $array['idade'] ?? '';

echo "idade: ".$idade;