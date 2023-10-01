<?php 
	session_start();
	if (!isset($_SESSION['teacher'])) {
		header("location:../user_interface/login.php");
	}
 ?>