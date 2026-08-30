<?php

session_start();

include "../config/database.php";


if(isset($_SESSION["customer_id"]))
{
    $id=$_SESSION["customer_id"];
}

else if(isset($_SESSION["admin_id"]))
{
    $id=$_SESSION["admin_id"];
}

else
{
    $id=$_SESSION["deliveryman_id"];
}



$old=$_POST["old_password"];

$new=$_POST["new_password"];



$sql="SELECT * FROM users

WHERE id='$id'

AND password='$old'";


$result=mysqli_query($conn,$sql);



if(mysqli_num_rows($result)>0)
{

$sql2="UPDATE users

SET password='$new'

WHERE id='$id'";


mysqli_query($conn,$sql2);


echo "Password Changed Successfully";

echo "<br><br>";

echo "<a class='back-btn' href='view_profile.php'>
Back To Profile
</a>";

}

else
{

echo "Old Password Incorrect";

}


?>