<?php
require 'jtw.php';

$jwt = new JWT();

$data = array("id_user"=>123);

$token = $jwt->create($data);

echo "token: ".$token;