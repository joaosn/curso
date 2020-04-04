<?php
class Livro {

	private $titulo;
	private $autor;

	public function __construct($titulo,$autor) {
		$this->titulo = $titulo;
		$this->autor = $autor;
	}
	public function getTitulo() {
		return $this->titulo;
	}
	public function getAutor() {
		return $this->autor;
	}
}

class listaLivros {
	private $livros;
    private $filaindex;

    public function __construct() {
    	$this->filaindex = 0;
    }

    public function addLivro(Livro $livros) {
    	$this->livros[] = $livros;
    }

    public function contar() {
    	return count($this->livros);
    }
    
    public function removeLivro(Livro $livros) {
         foreach ($this->livros as $key => $value) {
         	if(($value->getTitulo().$value->getAutor()) == ($livros->getTitulo().$livros->getAutor()) ) {
                    unset($this->livros[$key]);
         	}
         }
          $this->livros = array_values($this->livros);
    }

    public function current() {
        return $this->livros[$this->filaindex];
    }

    public function next() {
        $this->filaindex++;
    }

    public function key() {
       return $this->filaindex;
    }

    public function reset() {
         $this->filaindex = 0;
    }

    public function valid() {
        if(isset($this->livros[$this->filaindex])) {
            return true;
        } else {
        	return false;
        }
    }

}