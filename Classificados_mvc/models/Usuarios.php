<?php
/**
 * essa e uma class de usuaris q vai cuidar de tuddo relacionado ao usuario
 */
class Usuarios extends model {
	
	 
	public function qtUse() {
    
    $sql = $this->db->query("SELECT COUNT(*) AS c FROM usuarios");
    $ro = $sql->fetch();

    return $ro['c'];
    
    }
	
	public function Cadastrar($nome, $email, $senha, $tel) {
        
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() ==0) {

        $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email,
        	senha = :senha, telefone = :tel");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->bindValue(":tel", $tel);
        $sql->execute();

        return true;

		} else {
			return false;
		}
	}


	public function Login($email, $senha) {  
         
         $sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
         $sql->bindValue(":email", $email);
         $sql->bindValue(":senha", md5($senha));
         $sql->execute();

        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['clogin'] = $dado['id'];
        	return true;
        } else {
        	return false;
        }
	}


	public function User($id) {
        
		$sql = $this->db->prepare("SELECT nome  FROM usuarios WHERE id = :id");
		$sql->bindValue(":id",$id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dd = $sql->fetch();

				return $dd['nome'];
		}
	}
}
?>