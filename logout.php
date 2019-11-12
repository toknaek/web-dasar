<?php 
	
	session_start();
	session_destroy();

	echo "<script>alert('anda sudah logout')</script>";
	echo "<script>window.location.replace('login.php');</script>";

?>