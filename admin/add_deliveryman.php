<?php

session_start();


if(!isset($_SESSION["admin_id"]))
{
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html>

<head>

<title>Add Delivery Man</title>
<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>Add New Delivery Man</h2>


<form action="../controller/add_deliveryman_process.php" method="POST">


<label>Name:</label>
<br>

<input type="text" name="name" required>


<br><br>


<label>Email:</label>
<br>

<input type="email" name="email" required>


<br><br>


<label>Phone:</label>
<br>

<input type="text" name="phone" required>


<br><br>


<label>Password:</label>
<br>

<input type="password" name="password" required>


<br><br>


<input type="submit" value="Add Delivery Man">


</form>
<br>

<center>

<a class="back-btn" href="dashboard.php">

Back To Dashboard

</a>

</center>

</body>

</html>