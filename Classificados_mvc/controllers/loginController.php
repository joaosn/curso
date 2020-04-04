<?php  

class loginController extends controller {

	public function index() {

     $dados = array();

     $u = new Usuarios();

     if(isset($_POST['email']) && !empty($_POST['email'])) {
        
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];

       if($u->Login($email,$senha)) {

          header("Location:".BASE_URL);
       } else {
          
            $dados['msg'] = '<div class="alert alert-danger">
                      Usuario ou senha estão errados!!!
                   </div>';
        } 
    }
      
      $this->loadTemplate('login', $dados);
    }

    public function sair() {

    	unset($_SESSION['clogin']);
    	header("Location:".BASE_URL);
    }
}
?>