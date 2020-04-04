<?php  
$nome = $_POST['nome'];
$senha =$_POST['senha'];

 $array = array('status'=>'');

if($nome == 'joão vitor' && $senha == 'juliana') {
	$array['status'] = 'ok';
}
echo json_encode($array);
//$p = $_POST;
//$p['qt_nome'] = strlen($_POST['nome']);
// echo json_encode($p);
?>