<?php  
 abstract class Video {
 	abstract public function render();
 }
 abstract class abstractFactory {
 	abstract public function createPlayer($url);
 }

class flashPlayer extends Video {
	private $url;
	public function __construct($url) {
		$this->url = $url;
	}
     public function render() {
     	echo '<coisa>'.$this->url.'<object>';
     }
}

class flashFactory extends abstractFactory {
	public function createPlayer($url) {
		return new flashPlayer($url);
	}
}

class HtmlFactory extends abstractFactory {
	public function createPlayer($url) {
		return new htmlPlayer($url);
	} 
}
class htmlPlayer extends Video {
	private $url;
	public function __construct($url) {
		$this->url = $url;
	} 
	public function render() {
		echo "<video>".$this->url."</video>";
	}
}

//$fac = new HtmlFactory();
$fac = new flashFactory();
$player = $fac->createPlayer('123');
$player->render();