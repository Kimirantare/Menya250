<?php 
session_start();
	if (!isset($_SESSION['admin'])) {
			header("location:../user_interface/login.php");

	}
 ?>