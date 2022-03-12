<?php
require 'PHP/connection.php';
@$fid=trim($_REQUEST['fid']);

$query = "SELECT * FROM flight WHERE flight_id='$fid'";
$result	=	mysqli_query($conn,$query);
$res = mysqli_fetch_array($result);

if(isset($_REQUEST['btnSubmit'])){
	@$fType=trim($_REQUEST['fType']);@$fFrom=trim($_REQUEST['fFrom']);@$fTo=$_REQUEST['fTo']; @$Depart=$_REQUEST['Depart'];@$Return=$_REQUEST['Return'];@$Class=$_REQUEST['Class'];@$flightid=$_REQUEST['flightid'];
	@$fpay=trim($_REQUEST['fpay']);

	//flight id is not allowed to update
	$query = "UPDATE flight SET f_from='$fFrom',f_to='$fTo',f_return='$Return',f_depart='$Depart',f_class='$Class',f_type='$fType',payment='$fpay' WHERE flight_id='$fid'";
	if(mysqli_query($conn, $query)){
        header('location: flightlist_adm.php');
    }else{
        echo "ERROR: Unable to execute $query. " . mysqli_error($conn);
    }
	 
	
}
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
		
			<button class="login" style="width:100px;">Login</button>
		
			<button class="Register" style="width:100px;">Register</button>
		
			<hr id="test"/>
    	</div>
	</header>

	<br/>
	<ul class="menu">
		<li class="menu active"><a href="flight.php">New Flight</a></li>
		<li class="menu"><a href="flightlist_adm.php">Flight List</a></li>
        <li class="menu"><a href="list.php">User List</a></li>
        <li class="menu"><a href="adduser.html">New User</a></li>
	</ul>

	<br><br>

	<div class="Bookout">
		<div class="Bookfrm">
			<form  method="POST" name="bookForm" onsubmit="bookFormUser();" enctype="multipart/form-data">

			<script language="javascript">
				function checkFld(){
					if(document.frm1.uname.value=="" || document.frm1.passwd.value=="" || document.frm1.stname.value=="")
						{
		alert("Please provide all the info!");
		document.frm1.uname.focus();
		return false;
	}
		else{
		document.frm1.actionID.value="ADD";
		return true;
	}
}
</script>				
						<div class="title1">Flight Details</div>

						<label id="lGender">Type : </label><br>
						<input type="radio" name="fType" <?php if($res['f_type']=='Return'){?> checked <?php }?> value="Return"/><label>Return</label>
						<input type="radio" name="fType" <?php if($res['f_type']=='One way'){?> checked <?php }?> value="One way"/><lable>One way</lable>	
						<input type="radio" name="fType" <?php if($res['f_type']=='Redeem'){?> checked <?php }?> value="Redeem"/><lable>Redeem</lable><br><br>

						<label id="lFrom">Flight ID : </label> 
						<input type="text" readonly value="<?php echo $res['flight_id']?>" size="40" name="flightid" placeholder="Flight ID"/> <br><Br>
                        
                        	
						<label id="lFrom">From : </label> 
						<input type="text" value="<?php echo $res['f_from']?>" size="40" name="fFrom" placeholder="Departure Airport"/>
				
						<label id="lTo">To : </label>
						<input type="text" value="<?php echo $res['f_to']?>" size="40" name="fTo" placeholder="Arrival Airport"/><br><br>

						<label>Depart : </label> 
						<input type="date" id="dat" value="<?php echo $res['f_depart']?>" name="Depart"/>
						<label>Return : </label>
						<input type="date" id="dat" value="<?php echo $res['f_return']?>" name="Return"/><br><br>

						<label for="Class">Class : </label>
						<select id="Class" name="Class">
							<option value="Economy" <?php if($res['f_class']=='Economy') echo "selected";?>)>Economy</option>
							<option value="Business" <?php if($res['f_class']=='Business') echo "selected";?>>Business</option>
						</select>
						<br><br>
						<label id="lpay">Payment $  </label> 
						<input type="text" size="40" name="fpay" placeholder="payment" value="<?php echo $res['payment']?>"/>
						<br><br>
						
					
						<input type="submit" value="Update" name="btnSubmit"  class="send"/> 
						<input type="reset" value="Reset" name="Reset" class="send"/>
						<a href="BookFlight.html" style="padding: 2px;"><button class="send" style="width:100px;">Cancel</button></a> 

						<input type="hidden" name="actionID"><input type="hidden" name="actionID">
						
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