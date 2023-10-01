<?php

	$names = "";
	$username = "";
	$password = "";
	$errors = array();
	//connect to the db
$db = mysqli_connect('localhost', 'root', '', 'menya');
if (!$db) {

  echo "Connection failed!";

}
	 // if the send button is clicked
if (isset($_POST['addAdmin'])) {

	function validate($data){

		$data = trim($data);
 
		$data = stripslashes($data);
 
		$data = htmlspecialchars($data);
 
		return $data;
 
	 }
 

	$names = validate($_POST['newAdmin']);
	$username = validate($_POST['newUsername']);
	$password = validate($_POST['newPassword']);

	//if there are no erros save to db
	if (count($errors)  == 0) {

		$check_username = $db->query("SELECT * FROM admin WHERE username='$username'");
        if ($check_username->num_rows == 0) {
		
		$sql = "INSERT INTO admin (names,username,password) VALUES ('$names', '$username', '$password')";
		if ((mysqli_query($db, $sql))) {
			echo "<script>alert('New Admin Added Successfully!')</script>";
		}else{
			echo "<script>alert('Process Failed!')</script>";
		} 
	}
	
}


}

?>


