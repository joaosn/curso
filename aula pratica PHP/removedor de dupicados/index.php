<?php
 $array = array(1,2,3,4,5,6,6,1,2);
  
  
 $novoarray = array();
 foreach ($array as $n) {
 	if(in_array($n, $novoarray) == false) {
 		$novoarray[] = $n;
 	}
 }
 echo "<pre>";
 print_r($novoarray);
 	
?>