<?php

include 'connection.php';

$id=$_POST['user-ID'];
$FullName =$_POST['fullname'];
$UserName =$_POST['username'];
$useremail =$_POST['emailAdd'];
$telenumber =$_POST['mnum'];
$Gender =$_POST['gender'];
$BirthDay =$_POST['dateofbir'];
$password =$_POST['pass'];

$sql = "UPDATE users SET  FullName ='$FullName', UserName ='$UserName', TeleNumber ='$telenumber', email ='$useremail', TeleNumber ='$telenumber', UserGender ='$Gender', bday ='$BirthDay', PWSD ='$password' WHERE userID='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
  header('location: ../list.php');
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>