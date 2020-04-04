<?php  

$filer = "pzp_cover.png";

$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getimagesize($filer);

$ratio = $largura_original / $altura_original;

if($largura/$altura > $ratio) {
	$largura = $altura * $ratio;
} else {
	$altura = $largura / $ratio;
}

$imagem_final = imagecreatetruecolor($largura,$altura);
$imagem_original = imagecreatefrompng($filer);

imagecopyresampled($imagem_final, $imagem_original, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);

//header("Content-type: image/jpeg"); mostrar na tela

imagepng($imagem_final, "mini_imagem.png");

echo "salvo ";

?>