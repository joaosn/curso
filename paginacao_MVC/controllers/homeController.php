<?php 

class homeController extends Controller {
	

	public function index() {
	     $data = array();

         $items = new Item();


         $offset = 0;
         $limit = 10;

         $total = $items->getTotal();
         $data['paginaAtual'] = 1;

         $offset = ($data['paginaAtual'] * $limit) - $limit;

         $data['paginas'] = ceil($total/$limit);
         if(!empty($_GET['p'])) {
         	$data['paginaAtual'] = intval($_GET['p']);
         }
	     $data['lista'] = $items->getLista($offset, $limit);
	

        
		 $this->loadTemplate('home',$data);
	}

	
}
?>