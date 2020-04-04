<?php
class homeController extends controller {

    public function __construct() {
    	//parent::__construct();
    }

	public function index() {
		$dados = array();

		     $fotos = new Fotos();
		     $fotos->SaveFotos();
		     $dados['fotos'] = $fotos->getFotos();

		$this->loadTemplate('home', $dados);
	}

}