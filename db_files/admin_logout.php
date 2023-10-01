<?php 
	session_start();
	session_destroy();
	header("location:../user_interface/login.php");
 ?>