<?php 
 $loco = array('numeros' => 1,2,3,4,5,6,7,8,9,10 );  
 $grande = 0;

    foreach ($loco as $n) {
    	if($n > $grande) {
    		$grande = $n;
    	}
    }
	
   print_r($loco);
   echo "maior es ;".$grande;
?>