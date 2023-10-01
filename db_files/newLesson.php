<?php

	$newLesson = "";
	$lessonID = "";
	$errors = array();
	//connect to the db
$db = mysqli_connect('localhost', 'root', '', 'menya');
if (!$db) {

  echo "Connection failed!";

}
	 // if the send button is clicked
if (isset($_POST['addLesson'])) {

	function validate($data){

		$data = trim($data);
 
		$data = stripslashes($data);
 
		$data = htmlspecialchars($data);
 
		return $data;
 
	 }
 

	$newLesson = validate($_POST['newLesson']);
	$lessonID = validate($_POST['lessonID']);

	//if there are no erros save to db
	if (count($errors)  == 0) {
		
		$sql = "INSERT INTO lesson (name,lessonID) VALUES ('$newLesson', '$lessonID')";
		if ((mysqli_query($db, $sql))) {
			echo "<script>alert('New Lesson Added Successfully!')</script>";
			header('location:admin.php');
		}else{
			echo "<script>alert('Process Failed!')</script>";
		} 
	}
	
}

?>