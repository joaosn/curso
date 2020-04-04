<?php  
// filter_var
// filter_input
/*
FILTER_VALIDADE_INT 
FILTER_VALIDADE_BOOLEAN
FILTER_VALIDADE_FLOT
FILTER_VALIDADE_URL
FILTER_VALIDATE_EMAIL
FILTER_VALIDADE_REGEX
FILTER_VALIDADE_IP

FILTER_SANITIZE_STRING
FILTER_SANITIZE_ENCODE
FILTER_SANITIZE_SPECIAL_CHARS
*/

$email = 'jv.zyzz@gmail.com';
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

	echo "EMAIL GOF";
} else {
	 echo "non mail";
}


// print_r(filter_list()); para ver tipos de filtros