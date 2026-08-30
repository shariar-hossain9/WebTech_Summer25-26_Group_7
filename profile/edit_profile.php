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
    exit();
}



$sql="SELECT * FROM users WHERE id='$id'";


$result=mysqli_query($conn,$sql);


$user=mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>

<html>

<head>

<title>Edit Profile</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>Edit Profile</h2>



<form action="update_profile.php" method="POST">


<input type="hidden" 
name="id"
value="<?php echo $user["id"]; ?>">



<label>Name:</label>

<input type="text"
name="name"
value="<?php echo $user["name"]; ?>">



<label>Email:</label>

<input type="email"
value="<?php echo $user["email"]; ?>"
readonly>



<label>Phone:</label>

<input type="text"
name="phone"
value="<?php echo $user["phone"]; ?>">



<input type="submit" value="Update Profile">


</form>



<br>


<center>

<a class="back-btn" href="view_profile.php">

Back To Profile

</a>

</center>



</body>

</html>