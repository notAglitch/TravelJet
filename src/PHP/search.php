<?php
require 'connection.php';

if(isset($_REQUEST['btnsearch']))
    {
	echo @$txtsearch=trim($_REQUEST['txtsearch']);
	$sql = "SELECT * FROM flight WHERE flight_id='$txtsearch' OR f_from='$txtsearch' OR f_to='$txtsearch' OR f_return ='$txtsearch' OR f_depart='$txtsearch'";
	$result	=	mysqli_query($conn,$sql);
 
    if(mysqli_num_rows($result)>0)
        {
		header("Location: ../searchlist.php?txtsearch=$txtsearch");
        }
    else{
		echo "No matching flights";
		}
    }

?>