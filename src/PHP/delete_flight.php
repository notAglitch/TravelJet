<?php

require 'connection.php';

$id=$_REQUEST['fid'];



$sql = "DELETE FROM flight WHERE flight_id ='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('location: ../flightlist_adm.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>