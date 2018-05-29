<?php
	session_start();
	session_destroy();
	unset($_SESSION['user']);
	$_SESSION['msg'] = "You are now logged out.";
	header("location: home.php");
?>