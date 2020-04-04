<?php
require 'fb.php';

if(isset($_SESSION['fb_access_token'])  && !empty($_SESSION['fb_access_token'])) {
	 $token = $_SESSION['fb_access_token'];
	 $res = $fb->get('/me?fildes=email,name,id',$token);

	 $r = json_decode($res->getBody());

	 echo "meu nome ".$r->name;

	 echo "<br> <a href='sair.php'>Sair</a>";

} else {
	header("location: login.php");
}