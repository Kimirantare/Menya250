<?php

use LDAP\Result;

$teach_username = $_SESSION['teacher'];	
//connect to the db
$db = mysqli_connect('localhost', 'root', '', 'menya');
if (!$db) {

  echo "Connection failed!";

}
$mwarimu = $db->query("SELECT * FROM teachers WHERE username='$teach_username'");
$res = $mwarimu->fetch_assoc();

	$title = "";
	$lesson = $res['lesson'];
	$class = $res['class'];
	$description = "";
	$links = "";
	$content = "";
	$owner =$res['names'];
	$date = date('Y-m-d H:i:s');
	$errors = array();

	 // if the send button is clicked
if (isset($_POST['send'])) {

	function validate($data){

		$data = trim($data);
 
		$data = stripslashes($data);
 
		$data = htmlspecialchars($data);
 
		return $data;
 
	 }
 

	$title = validate($_POST['title']);
	$content = validate($_POST['content']);
	$description = validate($_POST['description']);
	$links = validate($_POST['links']);

	//process images uploaded
	$imagesCount = count($_FILES['image']['name']);
	for($i=0;$i<$imagesCount;$i++){
		$imageName = $_FILES['image']['name'][$i];
		$imageTempName = $_FILES['image']['tmp_name'][$i];
		$targetPath = "../assets/img/upload/".$imageName;
		if(move_uploaded_file($imageTempName, $targetPath)){

			
				$sql = "INSERT INTO notes (lesson,title,class,description,content,images,links,owner,time) VALUES 
														('$lesson', '$title', '$class', '$description','$content', '$imageName','$links', '$owner', '$date')";
				$result = mysqli_query($db, $sql);	
			}
		}
		if ($result) {
					header('location:teacher_page.php');
					echo "<script>alert('Content Added Successfully!')</script>";
				}else{
					echo "<script>alert('Process Failed!')</script>";
				} 
	
}

?>
