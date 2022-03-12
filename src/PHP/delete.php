<?php

require 'connection.php';

$id=$_REQUEST['userID'];



$sql = "DELETE FROM users WHERE userID ='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('location: ../list.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>