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

<title>Admin Dashboard</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>



<body>


<h2>
Welcome Admin 
<?php echo $_SESSION["admin_name"]; ?>
</h2>



<h3>Admin Panel</h3>


<a href="add_deliveryman.php">
Add Delivery Man
</a>


<br><br>




<a href="view_orders.php">
View Orders
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