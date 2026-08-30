<?php

session_start();

include "../config/database.php";


if(isset($_SESSION["customer_id"]))
{
    $id = $_SESSION["customer_id"];
}

else if(isset($_SESSION["admin_id"]))
{
    $id = $_SESSION["admin_id"];
}

else if(isset($_SESSION["deliveryman_id"]))
{
    $id = $_SESSION["deliveryman_id"];
}

else
{
    header("location:../index.php");
}


$sql = "SELECT * FROM users WHERE id='$id'";


$result = mysqli_query($conn,$sql);


$user = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>

<html>

<head>

<title>My Profile</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>My Profile</h2>



<p>
<b>Name:</b>

<?php echo $user["name"]; ?>

</p>



<p>
<b>Email:</b>

<?php echo $user["email"]; ?>

</p>



<p>
<b>Phone:</b>

<?php echo $user["phone"]; ?>

</p>



<p>
<b>Role:</b>

<?php echo $user["role"]; ?>

</p>



<br>


<a class="back-btn" href="edit_profile.php">

Edit Profile

</a>


<br><br>


<a class="back-btn" href="change_password.php">

Change Password

</a>

<br><br>

<center>

<a class="back-btn" href="javascript:history.back();">

Back

</a>

</center>

</body>

</html>