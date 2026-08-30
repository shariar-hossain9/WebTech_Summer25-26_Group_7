<?php

session_start();

?>


<!DOCTYPE html>

<html>


<head>

<title>Change Password</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>Change Password</h2>



<form action="change_password_process.php" method="POST">


<label>Old Password:</label>

<input type="password" name="old_password">



<label>New Password:</label>

<input type="password" name="new_password">



<input type="submit" value="Change Password">


</form>
<br><br>

<center>

<a class="back-btn" href="view_profile.php">

Back To Profile

</a>

</center>

</body>

</html>