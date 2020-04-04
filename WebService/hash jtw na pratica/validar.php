<?php
require 'jtw.php';
$jwt = new JWT();

if(!empty($_GET['jwt'])) {
  $token = $_GET['jwt'];
  $info = $jwt->validate($token);

  if($info) {
     echo "id do usuario: ".$info->id_user;
  } else {
  	 echo "token Invalido!";
  }


} else {
	echo "token Invalido!";
}


//echo "meu nome: ".$nome;