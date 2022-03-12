<?php
include_once("PHP/connection.php");
$result	=	mysqli_query($conn,"SELECT * FROM flight ORDER BY flight_id ASC");
 
?>
<!DOCTYPE html>
<html>
  <head>
	<!--Link to css-->
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/Flight.css">
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width">
	
	<script src="js/Flight.js"></script>

	<!--title of the page-->
    <title>Flight</title>
	

	
  </head>
  
  
  <body>
	
	<header>
		<div class="first">
			<hr id="test"/>
		
			<a href="index.html"><img class="logo" src="images/logo.jpg" height="100" width="380" alt="logo"></a>
		
			<hr id="test"/>
    	</div>
	</header>

	<br/>
	<ul class="menu">
		<li class="menu"><a href="flight.php">New Flight</a></li>
		<li class="menu active"><a href="flightlist_adm.php">Flight List</a></li>
        <li class="menu"><a href="list.php">User List</a></li>
        <li class="menu"><a href="adduser.html">New User</a></li>
	</ul>

	<br><br>

	<div class="Bookout">
		<div class="Bookfrm">
			<form  method="POST" name="bookForm" onsubmit="bookFormUser();" enctype="multipart/form-data">
				<table border="1" width="100%">
					<tr>
					  <th width="11%" align="left">Flight ID</th>
						<th width="18%" align="left">Flight Departure Airport</th>
						<th width="18%" align="left">Flight Arrival Airport</th>
						<th width="18%" align="left">Departure Date</th>
						<th width="19%" align="left">Return Date</th>
						<th width="16%" align="left">Per Passenger Paymet</th>
						<th width="16%" align="left">&nbsp;</th>
					</tr>
                    <?php 
					while($res = mysqli_fetch_array($result)){	?>
					<tr>
					  <td><?php echo $res['flight_id']?></td>
						<td><?php echo $res['f_from']?></td>
						<td><?php echo $res['f_to']?></td>
						<td><?php echo $res['f_depart']?></td>
						<td><?php echo $res['f_return']?></td>
						<td><?php echo $res['payment']?></td>
						<td><a href="editflight.php?fid=<?php echo $res['flight_id'] ?>">Edit</a> | <a href="PHP/delete_flight.php?fid=<?php echo $res['flight_id'] ?>" onClick="return confirm('Are you sure want to delete?')">Delete</a></td> 
				</td>
					</tr>
                    <?php } ?>
					 
		
				</table>	
				</form>
			</div>
		</div>
	<br><br>
	
	<footer>
			<p><a href="index.html">Home</a>  |  <a href="ContactUs.html">Contact Us</a>  |  <a href="AboutJourney.html">About Journey</a><p>
			<p>TravelJet Airlines </p>
			<p><i>No99,Park Road,Colombo-07,Sri Lanka</i></p>
			<p><i>Tel:0112123456/0771234567</i></p>
			<small>&#169;traveljet.com All Rights Reserved</small>
			<img class="visa" src="images/visa-logo.png" height="50" width="50" alt="visa">
			<img class="mastercard" src="images/mastercard.png" height="50" width="50" alt="mastercard">
			<a href="https://www.facebook.com/login/"><img class="facebook" src="images/facebook.png" height="40" width="40" alt="facebook"></a>
			<a href="https://twitter.com/twitt_login?lang=en"><img class="twitter" src="images/twitter.png" height="40" width="40" alt="twitter"></a>
			<a href="https://www.instagram.com/?hl=en"><img class="instagram" src="images/instagram.png" height="40" width="40" alt="instagram"></a>
			<a href="https://www.youtube.com/"><img class="youtube" src="images/youtube.png" height="40" width="40" alt="youtube"></a>
			<a href="https://play.google.com/store/movies?hl=en&tab=w8"><img class="google-play" src="images/google-play.png" height="40" width="40" alt="google-play"></a>
			<a href="https://www.apple.com/app-store/"><img class="app-store" src="images/app-store.png" height="40" width="40" alt="app-store"></a>
			<img class="qr-code" src="images/qr-code.png" height="100" width="100" alt="qr-code">
    </footer>
  </body>
</html>