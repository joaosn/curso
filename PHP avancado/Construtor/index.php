<?php  

class post {
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;

	public function __construct($t,$c) {
        $this->setTitulo($t);
        $this->setCorpo($c);
	}

  public function getTitulo() {
      return $this->titulo;
      
  }
  public function getCorpo() {
  	  return $this->corpo;
  }

  public function setTitulo($t) {
     if(is_string($t)) {
     	 $this->titulo = $t;
     }
  }

  public function setCorpo($c){
  	$this->corpo = $c;
  }
}

$post = new post("joão e lindo de mais ", "ele é cara legal que toma muito terere e gosta de ficar susegado ");

echo "Titulo do post: ".$post->getTitulo()."<br>".$post->getCorpo();
?>