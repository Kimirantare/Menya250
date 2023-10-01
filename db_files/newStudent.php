<?php 
 $class = "";
 $stream = "";
 $errors = array();
 //connect to the db
$db = mysqli_connect('localhost', 'root', '', 'menya');
require '../assets/vendor1/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['addStudent'])) {
	//process html form input
	function validate($data){

		$data = trim($data);
 
		$data = stripslashes($data);
 
		$data = htmlspecialchars($data);
 
		return $data;
 
	 }
	 $class = validate($_POST['option']);
	 $stream = validate($_POST['level']);
	 //process xls,cvs, xlsx input
		$fileName = $_FILES['import_file']['name'];
		$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

		$allowed_ext = ['xls', 'csv', 'xlsx'];

		if(in_array($file_ext, $allowed_ext)){
			$inputFileNamePath = $_FILES['import_file']['tmp_name'];
			$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
			$file_data = $spreadsheet -> getActiveSheet() ->toArray();

			$count = "0";
			foreach($file_data as $row){

				if($count > 0){
					$names = $row['0'];
					$username = $row['1'];
					$email = $row['2'];
					$phone = $row['3'];
					$gender = $row['4'];
					$password = $row['5'];
	

	
					$check_username = $db->query("SELECT * FROM students WHERE username='$username'");
							if ($check_username->num_rows == 0) {
					
					$sql = "INSERT INTO students (names,username,email,phone,gender,class,stream,password) VALUES
																						 ('$names', '$username', '$email', '$phone', '$gender', '$class', '$stream', '$password')";
					$result = mysqli_query($db, $sql);
						if ($result) {
							header('location:admin.php');
							echo "<script>alert('New Students Added Successfully!')</script>";
						}else{
							header('location:admin.php');
							echo "<script>alert('Process Failed!')</script>";
						} 
			
							}	
				}else{
					$count = "1";
				}
																							 
				
				}
			}

}

?>