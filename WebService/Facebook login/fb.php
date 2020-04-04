<?php 
session_start();
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
   'app_id' => '784017735353810',
   'app_secret' => '81a86fb146d8ba4e0c4bc00d5ca2b105',
   'default_graph_version' => 'v5.0'
]);