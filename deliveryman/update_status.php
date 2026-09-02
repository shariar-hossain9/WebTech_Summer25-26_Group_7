<?php

include "../config/database.php";


$order_id = $_POST["order_id"];

$status = $_POST["status"];



$sql = "UPDATE orders

SET status='$status'

WHERE order_id='$order_id'";



$result = mysqli_query($conn,$sql);



if($result)
{

echo "Status Updated Successfully";

echo "<br><br>";

echo "<a href='assigned_orders.php'>
Back To Orders
</a>";

}

else
{

echo "Update Failed";

}


?>