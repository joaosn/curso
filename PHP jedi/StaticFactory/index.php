<?php 

final class staticFactory {
	public static function factory ($type) {
		if($type == 'number') {
			return new FormatNumero();
		} else {
			if($type == 'string') {
				return new FormatString();
			}
		}
	}
}

interface FormatInterface {
	public function format($n);
}
class FormatNumero implements FormatInterface {
  public function format($n) {
  	echo "minha pikaaaaaaaaa".$n;
  }
}
class FormatString implements FormatInterface {
  public function format($n) {
  	echo "minha rola".$n;
  }
}

$formatT = staticFactory::factory("number");
$formatT->format('tetste');