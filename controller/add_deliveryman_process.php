<?php

session_start();

include "../config/database.php";


$name = $_POST["name"];

$email = $_POST["email"];

$phone = $_POST["phone"];

$password = $_POST["password"];


$role = "deliveryman";



$sql = "INSERT INTO users

(name,email,phone,password,role)

VALUES

('$name',
'$email',
'$phone',
'$password',
'$role')";



$result = mysqli_query($conn,$sql);



if($result)
{

echo "Delivery Man Added Successfully";

echo "<br>";

echo "<a href='../admin/dashboard.php'>
Back To Dashboard
</a>";

}

else
{

echo "Failed To Add Delivery Man";

}


?>