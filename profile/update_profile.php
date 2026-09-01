<?php

session_start();

include "../config/database.php";


$id=$_POST["id"];

$name=$_POST["name"];

$phone=$_POST["phone"];



$sql="UPDATE users

SET name='$name',
phone='$phone'

WHERE id='$id'";



$result=mysqli_query($conn,$sql);



if($result)
{

echo "Profile Updated Successfully";

echo "<br><br>";

echo "<a class='back-btn' href='view_profile.php'>
Back To Profile
</a>";

}

else

{

echo "Update Failed";

}


?>