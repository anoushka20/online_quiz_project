<!DOCTYPE HTML>
<html>
<head>
<title>New user Signup </title>

<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
?>


<center>
    <h1>New User Signup</h1>
	<hr>
	<br><br>
	<form name="form1" method="post" action="signupuser.php">
	 Login Id: <br><input type="text" name="lid"><br><br>
     Password: <br><input type="password" name="pass"><br><br>
	 Re-enter Password: <br><input name="cpass" type="password" id="cpass"><br><br>
	 Name: <br><input name="name" type="text" id="name"><br><br>
	 Address: <br><textarea name="address" id="address"></textarea><br><br>
	 City:<br><input name="city" type="text" id="city"><br><br>
	 Phone:<br><input name="phone" type="text" id="phone"><br><br>
	 Email: <br><input name="email" type="text" id="email"><br><br>
	 <input type="submit" name="Submit" value="Signup"><br>
     </form>
 </center>
</body>
</html>
