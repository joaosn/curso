<?php 
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;

class HomeController extends Controller {
	
	public function index() {
		$usuarios = new Usuarios();
        $anuncios = new Anuncios();
		$dados = array(
            'quatidade'=> $anuncios->getQuantidade(),
            'nome'=> $usuarios->getNome(),
            'idade'=> $usuarios->getIdade(),
		);

        
		 $this->loadTemplate('home',$dados);
	}

	
}