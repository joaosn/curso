<?php  
class anunciosController extends controller {

   public function index() {
 

	$dados = array();

		if(empty($_SESSION['clogin'])) {
	  header("Location:".BASE_URL);	
	 exit;
	} 
		$a = new Anuncios();
        $anuncios = $a->getMeusAnuncios();

        $dados['anuncios'] = $anuncios;
	
	
	$this->loadTemplate('anuncios', $dados);
   }

    public function editar($id) {
        $dados = array();

		if(empty($_SESSION['clogin'])) {
			header("Location:".BASE_URL."login");
			exit;
		}
		
		$a = new Anuncios();
		if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = addslashes($_POST['titulo']);
			$categoria = addslashes($_POST['categoria']);
			$valor = addslashes($_POST['valor']);
			$descricao = addslashes($_POST['descricao']);
			$estado = addslashes($_POST['estado']);
				  if(isset($_FILES['fotos'])) {
				  $fotos = $_FILES['fotos'];
				  } else {
				     $fotos = array();
				  }
			$id = $_GET['id'];
		  
			$a->editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos,$id);
			
			$dados['msg'] ='<div class="alet alert-success">Produto Editado com Sucesso!! </div>';
		}
		if(isset($_GET['id']) && !empty($_GET['id'])) {
		$info = $a->getAnuncio($_GET['id']);
		} else {
		  header("Location:".BASE_URL.'anuncios');
		  exit;
		}
	     
	      $c = new Categorias();
          $cats = $c->getLista();
              
        $dados['cats'] = $cats;
        $dados['info'] = $info;
       

        $this->loadTemplate('editar', $dados);
	}

	public function excluir($id) {

		    $dados = array();

			if(empty($_SESSION['clogin'])) {
			 header("Location:".BASE_URL."login");
				exit;
			}

			 $a = new Anuncios();       
			 if(isset($_GET['id']) && !empty($_GET['id'])) {
			 	$id = addslashes(($id));
			     $a->excluirAnuncio($_GET['id']);
			 }

			header("Location:".BASE_URL.'anuncios');
	}

	public function add() {
					
            $dados = array();

			if(empty($_SESSION['clogin'])) {
			    header("Location:".BASE_URL."login");
			    exit;
			}
			$a = new Anuncios();
			if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
				$titulo = addslashes($_POST['titulo']);
				$categoria = addslashes($_POST['categoria']);
				$valor = addslashes($_POST['valor']);
				$descricao = addslashes($_POST['descricao']);
				$estado = addslashes($_POST['estado']);

				$a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);
				
			    $dados['msg'] = '<div class="alet alert-success">Produto Adicionado com Sucesso!!</div>';

			     $c = new Categorias();
                 $cats = $c->getLista();

                 $dados['cats'] = $cats;
				
				$this->loadTemplate('add', $dados);

			}
			

	}

      public function excluirFoto() {

      	 $dados = array();
				     
				if(empty($_SESSION['clogin'])) {
				 header("Location:".BASE_URL."login");
					exit;
				}
				        $a = new Anuncios();
				       
				 if(isset($_GET['id']) && !empty($_GET['id'])) {
				 	$id = addslashes(($id));
				   $id_anuncio = $a->excluirFoto($_GET['id']);
				 }
				if(isset($id_anuncio)) {
				    header("Location:".BASE_URL."anucios/editar/".$id_anuncio);
				}else {
					header("Location:".BASE_URL."anucios");
				}

      }

}


?>
        