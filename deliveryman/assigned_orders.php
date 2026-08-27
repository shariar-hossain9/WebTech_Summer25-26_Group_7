<?php

session_start();

include "../config/database.php";


if(!isset($_SESSION["deliveryman_id"]))
{
    header("location:login.php");
    exit();
}


$deliveryman_id = $_SESSION["deliveryman_id"];



$sql = "SELECT * FROM orders
WHERE deliveryman_id='$deliveryman_id'";


$result = mysqli_query($conn,$sql);


?>


<!DOCTYPE html>
<html>

<head>

<title>Assigned Orders</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>My Assigned Orders</h2>



<?php while($row = mysqli_fetch_assoc($result)) { ?>
<div class="order-card">
<h3>Order ID: <?php echo $row["order_id"]; ?></h3>
<p><b>Pickup Address:</b><br><?php echo $row["pickup_address"]; ?></p>
<p><b>Delivery Address:</b><br><?php echo $row["delivery_address"]; ?></p>
<p class="status"><?php echo $row["status"]; ?></p>
<a href="customer_details.php?id=<?php echo $row["order_id"]; ?>">View Details</a>
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