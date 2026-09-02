<?php

include "../config/database.php";


$order_id = $_POST["order_id"];


$sql = "SELECT status FROM orders 
WHERE order_id='$order_id'";


$result = mysqli_query($conn,$sql);


$row = mysqli_fetch_assoc($result);





$data = array("status" => $row["status"]);
$json = json_encode($data);

file_put_contents("../json/response.json", $json);

echo $json;






?>