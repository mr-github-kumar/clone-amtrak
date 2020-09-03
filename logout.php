<?php
	session_start();
	$_SESSION['message'] = 'User logout successfully.';
	$_SESSION['name'] = '';
	header("location:index.php");
?>