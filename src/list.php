<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.topics{
	position: absolute;
	z-index: 1;

}

.topic-1{
	font-size: 30px;
	font-weight: bold;
	text-align: center;
}

.top-buttons{
	
}

.addUSer{
	padding: 20px;
	margin-bottom: 5px;
	background-color: #dddddd;
	border: 0;
	float: right;
	cursor: pointer;
}
</style>
</head>
<body>

<?php
include_once("PHP/connection.php");
$result	=	mysqli_query($conn,"SELECT * FROM users ORDER BY userID ASC");
?>

<div class="topics">
	<h1 class="topic-1">User Management</h1>
</div>

<div class="top-buttons">
	<a href="adduser.html"><button class="addUSer" style="width:100px;">Add User</button></a><a href="list.php"><button class="addUSer" style="width:100px;">User List</button></a><a href="flightlist_adm.php"><button class="addUSer" style="width:100px;">Flight List</button></a><a href="flight.php"><button class="addUSer" style="width:150;">New Flight</button></a>
</div>

<table width='80%' >
	
		<tr bgcolor='#DDDDDD'>
			<th>User ID</th>
			<th>User Name</th>
			<th>Full Name</th>
			<th>Gender</th>
			<th>Telephone</th>
      		<th>E-Mail</th>
			<th>DOB</th>
			<th>Update</th>  
		</tr>
		
		<?php
		
			While($res = mysqli_fetch_array($result)){		
				echo "<tr>";
					echo "<td> USER ID ".$res['userID']."</td>";
					echo "<td>".$res['UserName']."</td>";
					echo "<td>".$res['FullName']."</td>";
					echo "<td>".$res['UserGender']."</td>";
					echo "<td>".$res['TeleNumber']."</td>";
					echo "<td>".$res['email']."</td>";
          			echo "<td>".$res['bday']."</td>";
				
					echo "<td><a href=\"showedit.php?userID=$res[userID]\">Edit</a> | <a href=\"PHP/delete.php?userID=$res[userID]\" onClick=\"return confirm('Are you sure want to delete?')\">Delete</a></td>";
				echo "</tr>";
			
			}
	
        ?>
        
        
    </table>
    

</body>
</html>
