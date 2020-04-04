<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'develoment') {
	define("BASE_URL","http://localhost/pular_select/");
    $config['dbname'] = 'pular_select';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
	define("BASE_URL","http://localhost/pular_select/"); ///nome do sit
    $config['dbname'] = 'pular_select';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root'; /// ponhar aki a do meu servidor ex:hostgastor
    $config['dbpass'] = '';
} 

global $db;
try {
   
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);

} catch(PDOException $e) {
	echo "ERRO; ".$e->getMessage();
	exit;
}