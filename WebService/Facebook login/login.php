<?php
require 'fb.php';

$helper = $fb->getRedirectLoginHelper();

$permissions = array('email');

$loginurl = $helper->getLoginUrl('http://localhost/modulogit/curso/WebService/Facebook%20loguin/callback.php',$permissions);
?>
<h1><a href="<?php echo htmlspecialchars($loginurl); ?>">Login com Facebook</a></h1>