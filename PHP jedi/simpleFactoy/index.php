<?php
require 'facebook.php';

$fb = new Facebook();

$post = $fb->createPost();
$post->setAuthor("João Vitor");
$post->setMessage("Ola mundo sou João e ainda vou ser pleno developer full power!");

echo "Autor: ".$post->getAuthor()."<br>"; 
echo "txt: ".$post->getMessage();