<?php

session_start();

include "../config/database.php";


if(!isset($_SESSION["customer_id"]))
{
    header("location:login.php");
    exit();
}


$customer_id = $_SESSION["customer_id"];



$sql = "SELECT * FROM orders 
WHERE customer_id='$customer_id'";


$result = mysqli_query($conn,$sql);


?>


<!DOCTYPE html>
<html>

<head>

<title>My Orders</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>My Orders</h2>


<?php while($row = mysqli_fetch_assoc($result)) { ?>
<div class="order-card">
<h3>Order ID: <?php echo $row["order_id"]; ?></h3>
<p><b>Pickup Address:</b><br><?php echo $row["pickup_address"]; ?></p>
<p><b>Delivery Address:</b><br><?php echo $row["delivery_address"]; ?></p>
<p><b>Receiver Name:</b><br><?php echo $row["receiver_name"]; ?></p>
<p><b>Product Details:</b><br><?php echo $row["product_details"]; ?></p>
<p class="status"><?php echo $row["status"]; ?></p>
<a href="track_order.php?id=<?php echo $row["order_id"]; ?>">Track Order</a>
</div>
<?php } ?>


<br>


<center>

<a class="back-btn" href="dashboard.php">

Back To Dashboard

</a>

</center>



</body>

</html>