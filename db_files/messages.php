<?php

	$names = "";
	$email = "";
    $message = "";
    $feedback = "";
	$errors = array();
	//connect to the db
$db = mysqli_connect('localhost', 'root', '', 'menya');
if (!$db) {

  echo "Connection failed!";

}
	 // if the send button is clicked
if (isset($_POST['send'])) {

	function validate($data){

		$data = trim($data);
 
		$data = stripslashes($data);
 
		$data = htmlspecialchars($data);
 
		return $data;
 
	 }
 
	$names = validate($_POST['Name']);
	$email = validate($_POST['Email']);
    $message = validate($_POST['Message']);
    $feedback = validate($_POST['Like']);
  

	//if there are no erros save to db
	if (count($errors)  == 0) {
		
		$sql = "INSERT INTO messages (Names,Email,Message,Feedback) VALUES ('$names', '$email', '$message', '$feedback')";
		if ((mysqli_query($db, $sql))) {
			echo "<script>alert('Message Sent Successfully!')</script>";
		}else{
			echo "<script>alert('Message Not Sent!')</script>";
		} 
	}
	
}

?>