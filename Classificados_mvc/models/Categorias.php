<?php 
class Categorias extends model {

	public function getLista() {
		$array = array();
		
		$sql = $this->db->query("SELECT * FROM categorias");
		if($sql->rowCount() > 0) {
			$array = $sql->fetChAll();
		}

		return $array;
	}
}