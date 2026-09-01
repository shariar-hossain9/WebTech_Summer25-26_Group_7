<?php

include "../config/database.php";


$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];


$role = "customer";


$sql = "INSERT INTO users
(name,email,phone,password,role)

VALUES

('$name','$email','$phone','$password','$role')";


$result = mysqli_query($conn,$sql);



if($result)
{
    echo "Registration Successful";

    echo "<br>";

    echo "<a href='../customer/login.php'>Login Now</a>";
}

else
{
    echo "Registration Failed";
}


?>