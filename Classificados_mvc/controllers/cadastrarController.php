<?php  
class cadastrarController extends controller {

	public function index() {
         
    $dados = array();

    $u = new Usuarios();

    if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = ($_POST['senha']);
        $tel = addslashes($_POST['telefone']);

    if(!empty($nome) && !empty($email) && !empty($senha)) {
      if($u->Cadastrar($nome,$email,$senha,$tel)) {

      	$dados['msg'] ='<div class="alert alert-success">
        	       Usuario cadastrado com Suseceso!!!<a href="'.BASE_URL.'login" class="alert-link">Fazer login agora</a>
                   </div>';
    }else {

    	$dados['msg'] ='<div class="alert alert-danger">
        	      Este Usuario já existe!!!<a href="'.BASE_URL.'login" class="alert-link">Deseja fazer login agora?</a>
                   </div>';
       }
    }else {

    	$dados['msg'] ='<div class="alert alert-warning">
        		Porfavor Prencha Todos os Campos!!!
        	</div>';
    }
}

    $this->loadTemplate('cadastro', $dados);              
}


}
?>