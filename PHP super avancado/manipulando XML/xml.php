<?php  
//$xml = simplexml_load_file("aki tu ponah xml q pego na net depende do formato dele")



 function array_to_xml($data, &$xml_data ) { 
 // essafunçao trasforma meu array em xml
 	foreach ($data as $key => $value) {
 		if( is_array($value) ) {
 			if (is_numeric($key) ) {
 				$key = 'item'.$key;
 			}
 			$subnode = $xml_data->addChild($key);
 			array_to_xml($value, $subnode);
 		} else {
 			if (is_numeric($key) ) {
 				$key = 'item'.$key;
 			}
 			$xml_data->addChild($key, htmlspecialchars($value));
 		}
 	}
 }

 $data = array(
   "nome" => "joão",
   "sobrenome" => "Silva",
   "idade" => 19,
   "caracurakings" => array(
        "UNO",
        "CARINHA",
        "LELELE"
   )
);

 $xml_data = new SimpleXMLElement('<data/>');

 array_to_xml($data,$xml_data);

 $result = $xml_data->asXML();
 echo $result;
?>