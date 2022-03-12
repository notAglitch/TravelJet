<?php

require 'connection.php';



$username =$_POST['userName'];
$password =$_POST['userpswd'];

$user = mysqli_query($conn,"SELECT * FROM users WHERE UserName = '$username' and PWSD = '$password'") or die("Invalid Inputs");
$userOUT = mysqli_fetch_array($user);


$admin = mysqli_query($conn,"SELECT * FROM adminusers WHERE UName = '$username' and passWD = '$password'") or die ("Failed to query database");
$adminOUT = mysqli_fetch_array($admin);
 

if ($userOUT['UserName'] == $username && $userOUT['PWSD'] == $password ) {
	header('location: ../index.html');
}elseif ($adminOUT['UName'] == $username && $adminOUT['passWD'] == $password) {
	header('location: ../list.php');
}else {
	echo "not registered ";
}
mysqli_close($conn);

?>