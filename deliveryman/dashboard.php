<?php

session_start();


if(!isset($_SESSION["deliveryman_id"]))
{
    header("location:login.php");
}


?>


<!DOCTYPE html>

<html>


<head>

<title>Delivery Dashboard</title>
<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>
Welcome 
<?php echo $_SESSION["deliveryman_name"]; ?>
</h2>



<h3>Delivery Man Panel</h3>


<a href="assigned_orders.php">

View Assigned Orders

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