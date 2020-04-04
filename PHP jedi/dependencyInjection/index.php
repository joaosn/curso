<?php  
interface VideoServeInterface {
   public function getEMBED();
}
class Youtube implements VideoServeInterface {
	private $url;
	public function __construct($url) {
		$this->url = $url;
	}
	public function getEMBED() {
		return '<iframe>'.$this->url.'</video>';
	}
}

class Vimeo implements VideoServeInterface {
	private $url;
	public function __construct($url) {
		$this->url = $url;
	}
	public function getEMBED() {
		return '<video>'.$this->url.'</video>';
	}
}

class Wistia implements VideoServeInterface {
	private $url;
	public function __construct($url) {
		$this->url = $url;
	}
	public function getEMBED() {
		return '<coisa>'.$this->url.'</coisa>';
	}
}

class aula {
     
     private $video;
    
	public function __construct(VideoServeInterface $video) {
        $this->video = $video;
	}
	public function getVideoHtml() {
		return $this->video->getEMBED();
	}
}

$aula = new aula(new Wistia('123'));

echo "HTML: ".$aula->getVideohtml();