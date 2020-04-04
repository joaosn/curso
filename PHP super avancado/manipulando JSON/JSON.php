<?php  
//$json = file_get_contents("json vc ponha aki");
//$json = json_decode($json); //vai formatar en um array


//usar foreach para manipular array dps  
//usar jason oline para ver melhor 
//para adicinar mais coisa json 

//$obj = new StrClass() //ai vc vai dando so obg jeitos
//$obj->coisa = 'coisa';

//$json->previsao[] = $obj;//para add no meu json;

//json_encode($json); // para fazer um json
 
 $json = array(
   "nome" => "joão",
   "idade" => 19,
   "sobrenome" => "nascimento",
   "site" => "gazinCDmp.com"
 );

 echo json_encode($json);
?>