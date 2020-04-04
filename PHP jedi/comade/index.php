<?php
require 'class.php';

$luz = new Luz();


$c = new LuzOffComand($luz);
callComand($c);

echo "LUZ: ".$luz->getstatus();