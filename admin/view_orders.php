<?php

session_start();

include "../config/database.php";


if(!isset($_SESSION["admin_id"]))
{
    header("location:login.php");
}


$sql = "SELECT orders.*, users.name AS deliveryman_name

FROM orders

LEFT JOIN users

ON orders.deliveryman_id = users.id";


$result = mysqli_query($conn,$sql);


?>


<!DOCTYPE html>

<html>

<head>

<title>View Orders</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>


<body>


<h2>All Customer Orders</h2>


<?php while($row=mysqli_fetch_assoc($result)) { ?>
<div class="order-card">
<h3>Order ID: <?php echo $row["order_id"]; ?></h3>
<p><b>Customer ID:</b><br><?php echo $row["customer_id"]; ?></p>
<p><b>Pickup Address:</b><br><?php echo $row["pickup_address"]; ?></p>
<p><b>Delivery Address:</b><br><?php echo $row["delivery_address"]; ?></p>
<p class="status"><?php echo $row["status"]; ?></p>
<p><b>Delivery Man:</b><br><?php echo $row["deliveryman_name"] ? $row["deliveryman_name"] : "Not Assigned"; ?></p>
<a href="assign_delivery.php?id=<?php echo $row["order_id"]; ?>">Assign Delivery Man</a>
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