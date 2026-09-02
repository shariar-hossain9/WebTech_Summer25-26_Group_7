<?php

session_start();

include "../config/database.php";


if(!isset($_SESSION["deliveryman_id"]))
{
    header("location:login.php");
    exit();
}


$order_id = $_GET["id"];



$sql = "SELECT * FROM orders 
WHERE order_id='$order_id'";


$result = mysqli_query($conn,$sql);


$order = mysqli_fetch_assoc($result);



?>


<!DOCTYPE html>

<html>

<head>

<title>Customer Details</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>Customer Delivery Details</h2>



<p>
<b>Order ID:</b>
<?php echo $order["order_id"]; ?>
</p>



<p>
<b>Pickup Address:</b>
<?php echo $order["pickup_address"]; ?>
</p>



<p>
<b>Delivery Address:</b>
<?php echo $order["delivery_address"]; ?>
</p>



<p>
<b>Receiver Name:</b>
<?php echo $order["receiver_name"]; ?>
</p>



<p>
<b>Receiver Phone:</b>
<?php echo $order["receiver_phone"]; ?>
</p>



<p>
<b>Product Details:</b>
<?php echo $order["product_details"]; ?>
</p>



<p>
<b>Current Status:</b>
<?php echo $order["status"]; ?>
</p>



<form action="update_status.php" method="POST">


<input type="hidden" 
name="order_id"
value="<?php echo $order["order_id"]; ?>">



<button type="submit" 
name="status" 
value="Picked Up">

Pick Order

</button>



<br><br>



<button type="submit" 
name="status" 
value="Delivery Successful">

Complete Delivery

</button>


</form>



<br><br>



<center>

<a class="back-btn" href="assigned_orders.php">

Back To Orders

</a>

</center>



</body>

</html>