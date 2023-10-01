<?php

	$names = "";
	$username = "";
  $email = "";
  $phone = "";
	$lesson ="";
  $class = "";
	$stream = "";
	$password = "";
	$gender = "";
	$errors = array();
	//connect to the db
$db = mysqli_connect('localhost', 'root', '', 'menya');
if (!$db) {

  echo "Connection failed!";

}
	 // if the send button is clicked
if (isset($_POST['addTeacher'])) {

	function validate($data){

		$data = trim($data);
 
		$data = stripslashes($data);
 
		$data = htmlspecialchars($data);
 
		return $data;
 
	 }
 

	$names = validate($_POST['newTeacher']);
	$username = validate($_POST['newUsername']);
  $email = validate($_POST['email']);
  $phone = validate($_POST['phone']);
	$gender = validate($_POST['gender']);
	$lesson = validate($_POST['newLesson']);
  $class = validate($_POST['newClass']);
	$stream = validate($_POST['newStream']);
	$password = validate($_POST['newPassword']);

	//if there are no erros save to db
	if (count($errors)  == 0) {

		$check_username = $db->query("SELECT * FROM teachers WHERE username='$username'");
        if ($check_username->num_rows == 0) {
		
		$sql = "INSERT INTO teachers (names,username,email,phone,gender,lesson,class,stream,password) VALUES
																	 ('$names', '$username', '$email', '$phone', '$gender', '$lesson','$class', '$stream', '$password')";
		if ((mysqli_query($db, $sql))) {

			echo "<script>alert('New Teacher Added Successfully!')</script>";
			header('location:admin.php');
		}else{
			echo "<script>alert('Process Failed!')</script>";
		} 
	}
	
}


}

?>


