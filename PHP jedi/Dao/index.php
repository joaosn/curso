<?php
require "class.php";

$UsuarioDao = new UsuarioDao();

$UsuarioDao->insert(array(
  'nome' => 'zilda',
  'email' => 'zilda@gamul.com',
  'senha' => md5('123')
));

$usuario = $UsuarioDao->get();

foreach ($usuario as $usuario) {
	echo "Nome: ".$usuario->getName()." - ".$usuario->getEmail();
	echo "<hr/>";
}

