<?php 
session_start();
	if (!isset($_SESSION['student'])) {
			header("location:../user_interface/index.php");

	}
 ?>