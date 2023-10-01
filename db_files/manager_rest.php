<?php 
session_start();
	if (!isset($_SESSION['manager'])) {
			header("location:../user_interface/login.php");

	}
 ?>