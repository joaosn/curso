<?php 

class homeController extends controller {
	
	public function index() {
		
        $dados = array(); 

        $a = new Anuncios();
		$u = new Usuarios();
		$c = new Categorias();


		$filtros = array(
			   'categoria' => '',
			   'preco' => '',
			   'estado' =>''
		);
		 if(isset($_GET['filtros'])) {
		  $filtros = ($_GET['filtros']);
		 }

		$notc = $a->getTotalAnuncios($filtros);
		$p = 1;
		if(isset($_GET['p']) && !empty($_GET['p'])) {
		    $p = addslashes($_GET['p']);
		}
		$por_pagina = 2;
		$total_pagias = ceil($notc/$por_pagina);

		$anuncios = $a->getUltimosAnuncios($p,$por_pagina,$filtros);
		$categoria = $c->getLista();
		
		$dados['notc'] = $notc;
		$dados['categoria'] = $categoria;
		$dados['filtros'] = $categoria;
		$dados['anuncios'] = $anuncios;
		$dados['total_pagias'] =$total_pagias;
		        
				 $this->loadTemplate('home',$dados);
			}

			
	}