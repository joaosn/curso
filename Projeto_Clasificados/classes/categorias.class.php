<?php 
class categorias {

	public function getLista() {
		$array = array();
		global $pdo;

		$sql = $pdo->query("SELECT * FROM categorias");
		if($sql->rowCount() > 0) {
			$array = $sql->fetChAll();
		}

		return $array;
	}
}