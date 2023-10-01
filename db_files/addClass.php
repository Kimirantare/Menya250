<?php

	$newClass = "";
	$classID = "";
	$errors = array();
	//connect to the db
$db = mysqli_connect('localhost', 'root', '', 'menya');
if (!$db) {

  echo "Connection failed!";

}
	 // if the send button is clicked
if (isset($_POST['addClass'])) {

	function validate($data){

		$data = trim($data);
 
		$data = stripslashes($data);
 
		$data = htmlspecialchars($data);
 
		return $data;
 
	 }
 
	

	$newClass = validate($_POST['newClass']);
	$classID = validate($_POST['classID']);

	//if there are no erros save to db
	if (count($errors)  == 0) {
		
		$sql = "INSERT INTO class (name,classID) VALUES ('$newClass', '$classID')";
		if ((mysqli_query($db, $sql))) {
			echo "<script>alert('New Class Added Successfully!')</script>";
			header('location:admin.php');
		}else{
			echo "<script>alert('Process Failed!')</script>";
		} 
	}
	
}

?>