<?php

session_start();

if (isset($_GET['logout']))
 {
 	session_destroy();
 	header('Location: /projectfile/login.php');
	# code...
}

?>