<?php  

class post {
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;
    
    public function getTitulo() {
    	return $this->titulo;
    }
    public function setTitulo($t) {
       if(is_string($t)) {
       	    $this->titulo = $t;
       }
    	
    }	
}

$post = new post();
$post->setTitulo("eu muito lindoooo");

echo "titulo: ".$post->getTitulo();
?>