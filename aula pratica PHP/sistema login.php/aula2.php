<?php
 session_start();

if (isset($_SESSION['id'])  && empty($_SESSION['id']) == false) {
     echo "area restrita...";

}else {
	header("location: login.php");
}
?> 