<?php

$db = mysqli_connect('localhost', 'root', '', 'menya');
if (!$db) {

    echo "Connection failed!";
  
  }
$user = $db->query("SELECT * FROM students WHERE id='id'");
$res = $user->fetch_assoc();

$names = "";
$username = "2023STUD"+$res['id'];
$email = "";
$phone = "";
$class = "";
$pass = "";
$errors = array ();


//if the book now button is clicked
if (isset($_POST['newStud'])) {

    $names = htmlspecialchars($_POST['names']);
    //$username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $class = htmlspecialchars($_POST['option']);
    $pass = htmlspecialchars($_POST['pass']);

    //if there are no erros save to db
    if (count($errors) == 0) {
        
            $insert = $db->query("INSERT INTO students(names,username,email,phone,class,password)
 VALUES('$names',''$username',$email','$phone','$class', '$pass')");
            if ($insert) {
                echo "<script>alert('New Student Added Successfully!')</script>";
            } else {
                echo "<script>alert('Process Failed!')</script>";
            }

        }

    }




?>