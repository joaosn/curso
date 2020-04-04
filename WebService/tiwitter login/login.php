<?php
session_start();
require 'twconfig.php';
require 'TwitterOAuth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

$conect = new TwitterOAuth(CONSUMER_KEY,CONSUMER_SECRET);

$request_token = $conect->oauth('oauth/request_token',array( 
  'oauth_callback' => OAUTH_CALLBACK
));

$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

$url = $conect->url('oauth/authorize',array(
  'oauth_token' => $request_token['oauth_token']
));

header("Location: ".$url);