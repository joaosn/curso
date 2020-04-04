<?php 

class homeController extends Controller {
	public function __construct() {
		
	}


	public function index() {
		$dados = array();
		
        if(isset($_POTS['nome']) && !empty($_POTS['nome'])) {
        	$nome = addslashes($_POTS['nome']);

        	$dados['frase'] = 'meu nome: '.$nome;
        }
        
		 echo json_encode($dados);
		 exit;
	}

	
}