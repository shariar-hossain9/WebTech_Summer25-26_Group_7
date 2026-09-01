<?php

session_start();


if(!isset($_SESSION["customer_id"]))
{
    header("location:login.php");
}


?>


<!DOCTYPE html>

<html>

<head>

<title>Customer Dashboard</title>
<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>
Welcome 
<?php echo $_SESSION["customer_name"]; ?>
</h2>


<h3>Customer Dashboard</h3>


<a href="book_order.php">
Book Pickup Order
</a>


<br><br>


<a href="my_orders.php">
My Orders
</a>


<br><br>

<a class="back-btn" href="../profile/view_profile.php">

My Profile

</a>

<br><br>


<a href="logout.php">
Logout
</a>



</body>

</html>