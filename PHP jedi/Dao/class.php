<?php 
class dataBase {//localhost/phpmyadmin/db_structure.php?db=
  protected $db;
   public function __construct() {
      try {
        $this->db = new PDO("mysql:dbname=jedi_dao;host=localhost","root","");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      } catch (PDOException $e) {
        die($e->getMessage());
      }
   }
}
class UsuarioDao extends dataBase {
    public function __construct() {
      parent::__construct();
    }

    public function get($fields = array(), $where = array()) {
       $usuarios = array();
       $valores = array();
      
       if(count($fields) == 0) {
         $fields = array('*');
       }

       $sql = "SELECT ".implode(',', $fields)." FROM usuarios";
       if(count($where) > 0) {
        $tabelas = array_keys($where);
        $valores = array_values($where);
        $comp = array();

        foreach ($tabelas as $tabela) {
           $comp[] = $tabela." = ?";
        }

        $sql .= implode(" AND ", $comp);
       }

       $sql = $this->db->prepare($sql);
       $sql->execute($valores);

       if($sql->rowCount() > 0) {
          foreach ($sql->fetchAll() as $item) {
             $usuarios[] = new Usuario($item);
          }
       }

       return $usuarios;
    }

    public function insert($fields = array()) {
         if(count($fields) > 0) {

          $question = array();
          for ($q=0; $q <count(array_keys($fields)); $q++) { 
               $question[] = '?';
          }

          $sql = "INSERT INTO usuarios (".implode(',', array_keys($fields)).") VALUES (".implode(',', $question).")";

          $sql = $this->db->prepare($sql);
          $sql->execute(array_values($fields));
         }
    }
}

//data access object
class Usuario {
	private $nome;
	private $email;
	private $senha;
	private $id;

	public function __construct($array) {
       $this->nome = (isset($array['nome']))?$array['nome']:'';
       $this->email = (isset($array['email']))?$array['email']:'';
       $this->senha = (isset($array['senha']))?$array['senha']:'';
       $this->id = (isset($array['id']))?$array['id']:'';
	}

    public function getName() { return $this->nome;}
    public function getEmail() { return $this->email;}
    public function getId() { return $this->id;}
}