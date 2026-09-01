<?php

session_start();

session_unset();
session_destroy();

session_start();

include "../config/database.php";
include "../cookies/remember_me.php";

$email = $_POST["email"];
$password = $_POST["password"];
$role = $_POST["role"];



$sql = "SELECT * FROM users 
WHERE email='$email'
AND password='$password'
AND role='$role'";


$result = mysqli_query($conn,$sql);



if(mysqli_num_rows($result)>0)
{

    $row = mysqli_fetch_assoc($result);
if(isset($_POST["remember"]))
{
    createRememberCookie($email,$role);
}

    if($role == "customer")
    {

        $_SESSION["customer_id"] = $row["id"];
        $_SESSION["customer_name"] = $row["name"];


        header("Location: ../customer/dashboard.php");
        exit();

    }



    if($role == "admin")
    {

        $_SESSION["admin_id"] = $row["id"];
        $_SESSION["admin_name"] = $row["name"];


        header("Location: ../admin/dashboard.php");
        exit();

    }



    if($role == "deliveryman")
    {

        $_SESSION["deliveryman_id"] = $row["id"];
        $_SESSION["deliveryman_name"] = $row["name"];


        header("Location: ../deliveryman/dashboard.php");
        exit();

    }


}

else
{

echo "Invalid Email or Password";

}


?>