<?php

include "../config/database.php";


$order_id = $_GET["order_id"];


$sql = "SELECT status FROM orders 
WHERE order_id='$order_id'";


$result = mysqli_query($conn,$sql);


$row = mysqli_fetch_assoc($result);



$data = array(

"status" => $row["status"]

);



echo json_encode($data);


?>