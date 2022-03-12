<!DOCTYPE html>
<html>
<body>


<h1>Profile Edit</h1>

<form action="PHP/edit.php" method="POST">

    

    <?php
        require 'PHP/connection.php';
        $id=$_REQUEST['userID'];
        $result	=	mysqli_query($conn,"SELECT * FROM users WHERE userID=$id");
        $res = mysqli_fetch_array($result);

    ?>

    <label for="fname">User ID:</label><br>
    <input type="text"  name="user-ID" value="<?php echo $res['userID'] ?>"><br>

    <label for="fname">Full name:</label><br>
    <input type="text" id="fname" name="fullname" value=""><br>
    <label for="lname">User name:</label><br>
    <input type="text" id="lname" name="username" value=""><br>
    <label for="lname">Telephone</label><br>
    <input type="text" id="lname" name="mnum" value=""><br>
    <label id="lGender">Gender : </label><br>
		<input type="radio" name="gender" value="male"/><label>Male</label>
		<input type="radio" name="gender" value="female"/><lable>female</lable><br>
    <label for="lname">Password</label><br>
    <input type="text" id="lname" name="pass" value=""><br>
    <label>Date of Birth : </label> <br>
		<input type="date" id="dateOfB" name="dateofbir"/><br>
    <label for="lname">E-mail</label><br>
    <input type="text" id="lname" name="emailAdd" value=""><br><br><br>

  <button type="submit">Submit</button> 
</form>


</body>
</html>
