<?php

session_start();

include "../config/database.php";


$customer_id = $_SESSION["customer_id"];


$pickup = $_POST["pickup_address"];

$delivery = $_POST["delivery_address"];

$receiver = $_POST["receiver_name"];

$phone = $_POST["receiver_phone"];

$product = $_POST["product_details"];


$status = "Waiting for Pickup";



$sql = "INSERT INTO orders

(customer_id,
pickup_address,
delivery_address,
receiver_name,
receiver_phone,
product_details,
status)

VALUES

('$customer_id',
'$pickup',
'$delivery',
'$receiver',
'$phone',
'$product',
'$status')";



$result = mysqli_query($conn,$sql);



if($result)
{

echo "Order Placed Successfully";

echo "<br>";

echo "<a href='../customer/my_orders.php'>
View Orders
</a>";

}

else
{

echo "Order Failed";

}


?>