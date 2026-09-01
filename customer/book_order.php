<?php

session_start();


if(!isset($_SESSION["customer_id"]))
{
    header("location:login.php");
    exit();
}

?>


<!DOCTYPE html>
<html>

<head>

<title>Book Pickup Order</title>
<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>Book Pickup Order</h2>


<form action="../controller/order_process.php" method="POST">


<label>Pickup Address:</label>
<br>

<textarea name="pickup_address" required></textarea>


<br><br>


<label>Delivery Address:</label>
<br>

<textarea name="delivery_address" required></textarea>


<br><br>


<label>Receiver Name:</label>
<br>

<input type="text" name="receiver_name" required>


<br><br>


<label>Receiver Phone:</label>
<br>

<input type="text" name="receiver_phone" required>


<br><br>


<label>Product Details:</label>
<br>

<textarea name="product_details" required></textarea>


<br><br>


<input type="submit" value="Book Order">


</form>
<br><br>

<center>

<a class="back-btn" href="dashboard.php">

Back To Dashboard

</a>

</center>

</body>

</html>