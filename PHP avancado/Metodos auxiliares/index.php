<?php  

class post {
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;
	private $qtcoment;

  public function getTitulo() {
      return $this->titulo;
}
  public function setTitulo($t) {
  	if(is_string($t)) {
  		$this->titulo = $t;
  	}
  }

  public function addComentario($msg) {
  	 $this->comentarios[] = $msg;
  	 $this->contarComentarios();
  }

  public function getQuantosComentarios() {
  	  return $this->qtcoment;
  }
  private function contarComentarios() {
  	  $this->qtcoment = count($this->comentarios);
  }
}

$post = new post();

$post->addComentario("test1");
$post->addComentario("test3");
$post->addComentario("test3");
$post->addComentario("test2");

echo "esse povo fala olha tanto de comentario: ".$post->getQuantosComentarios();
?>