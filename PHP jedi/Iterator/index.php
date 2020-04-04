<?php 
require 'class.php';


$livro = new Livro('A vida minha','joão vitor');
$livro1 = new Livro('A vida minha2','joão vitor');
$livro2 = new Livro('A vida minha3','joão vitor');
$livro3 = new Livro('A vida minha4','joão vitor');


$lista = new listaLivros();
$lista->addLivro($livro);
$lista->addLivro($livro1);
$lista->addLivro($livro2);
$lista->addLivro($livro3);

$livro1 = $lista->current();

while($lista->valid()) {
	$livro = $lista->current();

	echo "Titulo: ".$livro->getTitulo()." - ".$livro->getAutor()."<br><hr>";

	$lista->next();
}