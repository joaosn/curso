<?php
session_start();
require 'twconfig.php';
require 'TwitterOAuth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

if(isset($_SESSION['tw_acess_token']) && !empty($_SESSION['tw_acess_token'])) {
 
   $conect = new TwitterOAuth(CONSUMER_KEY,CONSUMER_SECRET,$_SESSION['tw_acess_token']['oauth_token'],$_SESSION['tw_acess_token']['oauth_token_secret']);

   $user = $conect->get("account/verify_credentials");

   echo "nome:".$user->name; //pegar nome do usuario 

   print_r($user);
     
}else {
    echo '<a href="login.php"><h1>Loguin com Twitter</h1></a>';
}