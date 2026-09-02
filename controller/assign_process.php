<?php

include "../config/database.php";


$order_id=$_POST["order_id"];

$deliveryman_id=$_POST["deliveryman_id"];



$sql="UPDATE orders

SET deliveryman_id='$deliveryman_id'

WHERE order_id='$order_id'";



$result=mysqli_query($conn,$sql);



if($result)
{

echo "Delivery Man Assigned Successfully";

echo "<br>";

echo "<a href='../admin/view_orders.php'>
Back
</a>";

}

else
{

echo "Assignment Failed";

}


?>