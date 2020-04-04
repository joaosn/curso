<?php  
//define("ENVIRONMENT", "development"); // servidor interno;
//; // servidor externo;

if("ENVIRONMENT" == 'development') {
	define("ENVIRONMENT",'development');
} else {
	define("ENVIRONMENT",'production');
}
?>