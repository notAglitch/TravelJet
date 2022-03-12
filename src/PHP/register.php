<?php
require 'connection.php';

$username =$_POST['Uname'];
$fullName =$_POST['Fname'];
$Gender =$_POST['gender'];
$telenumber =$_POST['Telephone'];
$useremail =$_POST['Email'];
$BirthDay =$_POST['dateofbir'];
$password =$_POST['pass'];


$result = mysqli_query($conn,"SELECT * FROM  users WHERE email = '$useremail'") or die("Failed to query database");
$row = mysqli_fetch_array($result);

if ($row>0) {
	echo "User exist";
}else{
	$sql = "INSERT INTO users (userID, UserName, FullName, email, UserGender, bday, TeleNumber, PWSD) VALUES (null ,'$username', '$fullName', '$useremail', '$Gender', '$BirthDay', '$telenumber', '$password')";
	if(mysqli_query($conn, $sql)){
        header('location: ../login.html');
    }else{
        echo "ERROR: Unable to execute $sql. " . mysqli_error($conn);
    }
}


?> 