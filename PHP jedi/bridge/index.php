<?php
interface ApiDesenho {
	public function desenharCirculo($x,$y,$radius); 
}
class ApiDeseho1 implements ApiDesenho {
	public function desenharCirculo($x,$y,$radius) {
		echo "desenhado circulo, v1: ".$x." - ".$y." - ".$radius;
	}
}
class ApiDeseho2 implements ApiDesenho {
	public function desenharCirculo($x,$y,$radius) {
		echo "desenhado circulo, v2: ".$x." - ".$y." - ".$radius;
	}
}
abstract class Forma {
	protected $api;
	protected $x;
	protected $y;
	public function __construct(ApiDesenho $api) {
		$this->api = $api;
	}
}

class Circulo extends Forma {
    protected $radio;
    public function __construct($x, $y, $radius, ApiDesenho $api) {
       parent::__construct($api);
       $this->x = $x;
       $this->y = $y;
       $this->radio = $radius;
    }
    public function desenhar() {
    	$this->api->desenharCirculo($this->x,$this->y,$this->radio);
    }
}

$circulo = new Circulo(1,3,7, new ApiDeseho1());
$circulo->desenhar();