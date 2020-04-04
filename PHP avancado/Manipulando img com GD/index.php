<?php

$imagem = "forca.jpeg";

list($largura_original, $altura_original) = getimagesize($imagem);
list($largura_mini, $altura_mini) = getimagesize("mini_imagem.png");


$imagem_final = imagecreatetruecolor($largura_original, $altura_original);

$imagem_original = imagecreatefromjpeg("forca.jpeg");
$imagem_mini = imagecreatefrompng("mini_imagem.png");

imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_original, $altura_original);

imagecopy($imagem_final, $imagem_mini, 900, 0, 0, 0, $largura_mini, $altura_mini);

//header("Content-type: image/jpeg"); mostra na tela
//imagejpeg($imagem_final, "marca_dagua.png", 100); salva img criada
echo "salvoooss";
?>