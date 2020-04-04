<?php  
 class Item extends model {

 	public function getLista($offset, $limit) {
 		$array = array();

 		$sql = "SELECT * FROM items LIMIT $offset, $limit";
 		$sql = $this->db->query($sql);


        if($sql->rowCount() > 0) {
 		$array = $sql->fetchAll();

 		return $array;
 	   }
 	}

 	public function getTotal() {
 		$sql = "SELECT COUNT(*) as c FROM items";
 		$sql = $this->db->query($sql);
 		$sql = $sql->fetch();

 		return $sql['c'];
 	}
 }

?>