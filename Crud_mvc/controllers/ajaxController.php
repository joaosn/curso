<?php 
class ajaxController extends Controller {
	
	public function index() {
		$dados = array();


		 $this->loadView('ajax',$dados);
	}

	

}