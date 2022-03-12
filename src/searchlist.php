<?php
@$txtsearch=trim($_REQUEST['txtsearch']);
include_once("PHP/connection.php");
$result	=	mysqli_query($conn,"SELECT * FROM flight WHERE flight_id='$txtsearch' OR f_from='$txtsearch' OR f_to='$txtsearch' OR f_return ='$txtsearch' OR f_depart='$txtsearch'");
	if(mysqli_num_rows($result)>0){
		//header("Location: search_list.php?txtsearch='$txtsearch'");
	}else{
		echo "No matching flights";
		
		}
 
?>
<!DOCTYPE html>
<html>
  <head>
	<!--Link to css-->
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	
	<link rel="stylesheet" type="text/css" href="styles/Flight.css">

	<link rel="stylesheet" href="styles/search.css">

    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width">

	<!--title of the page-->
    <title>Flight</title>
	

	
  </head>
  
  
  <body>
<form  method="POST" name="frmsearch"  enctype="multipart/form-data">	
	<header>
		<div class="first">
			<hr id="test"/>
		
			<a href="index.html"><img class="logo" src="images/logo.jpg" height="100" width="380" alt="logo"></a>
		
			<a href="login.html"><button class="login" style="width:100px;">Login</button></a>
		
		<a href="register.html"><button class="Register" style="width:100px;">Register</button></a>
		
			<hr id="test"/>
     
	<ul class="menu">
				<li class="menu"><a href="index.html">Home</a></li>
				<li class="menu active"><a href="flightlist.php">Flight Schedule</a></li>
				<li class="menu"><a href="BookFlight.html">Book Flight</a></li>
				<li class="menu"><a href="TopDestination.html">Top Destination</a></li>
				<li class="menu"><a href="specialoffers.html">Special Offers</a></li>
				<li class="menu"><a href="ContactUs.html">Contact Us</a></li>
				<li class="menu"><a href="AboutUs.html">About Us</a></li>
				<li class="menu"></li>
				<div class="topnav">
					<input type="text" name="txtsearch" placeholder="Search" > 
					<input type="submit" name="btnsearch" value="Search">
				</div>
			</ul>
			
			<hr id="test"/>
	</header>
	<div class="Bookout">
		<div class="Bookfrm">
			
				<table border="1" width="100%">
					<tr>
					  <th colspan="6" align="center">Search Results</th>
				  </tr>
					<tr>
					  <th width="11%" align="left">Flight ID</th>
						<th width="18%" align="left">Flight Departure Airport</th>
						<th width="18%" align="left">Flight Arrival Airport</th>
						<th width="18%" align="left">Departure Date</th>
						<th width="19%" align="left">Return Date</th>
						<th width="16%" align="left">Per Passenger Payment($)</th>
					</tr>
                     <?php 
			while($res = mysqli_fetch_array($result)){	?>
					<tr>
					  <td><?php echo$res['flight_id']?></td>
						<td><?php echo$res['f_from']?></td>
						<td><?php echo $res['f_to']?></td>
						<td><?php echo $res['f_depart']?></td>
						<td><?php echo $res['f_return']?></td>
						<td><a href="Payment.html" style="padding: 2px;"><button class="send" style="width:100px;"><?php echo $res['payment']?></button></a></td>
					</tr>
                    <?php } ?>
					 
		
				</table>	
				 
			</div>
		</div>
	<br><br>
	</form>
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