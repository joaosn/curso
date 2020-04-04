<?php 
class Categorias {

	public function getLista() {
		$array = array();
		global $pdo;

		$sql = $pdo->query("SELECT * FROM categoria");
		if($sql->rowCount() > 0) {
			$array = $sql->fetChAll();
		}

		return $array;
	}
}