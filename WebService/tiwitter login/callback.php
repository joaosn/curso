<?php
session_start();
require 'twconfig.php';
require 'TwitterOAuth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

$request_token = array(
  'oauth_token' => $_SESSION['oauth_token'],
  'oauth_token_secret' => $_SESSION['oauth_token_secret']
);

$conect = new TwitterOAuth(CONSUMER_KEY,CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);

$_SESSION['tw_acess_token'] = $conect->oauth('oauth/acess_token', array(
   'oauth_verifier' => $_GET['oauth_verifier']
));

header('Location: index.php');