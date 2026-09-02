<?php

session_start();

include "../config/database.php";


if(!isset($_SESSION["admin_id"]))
{
    header("location:login.php");
    exit();
}



$order_id = $_GET["id"];


// Get current assigned delivery man

$order_sql = "SELECT deliveryman_id 
FROM orders 
WHERE order_id='$order_id'";


$order_result = mysqli_query($conn,$order_sql);


$order_data = mysqli_fetch_assoc($order_result);



$current_deliveryman = $order_data["deliveryman_id"];


// Get all delivery men

$sql = "SELECT * FROM users 
WHERE role='deliveryman'";


$result = mysqli_query($conn,$sql);



?>


<!DOCTYPE html>
<html>

<head>

<title>Assign Delivery Man</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>Assign Delivery Man</h2>



<?php

if($current_deliveryman != NULL)
{

    $name_sql = "SELECT name FROM users 
    WHERE id='$current_deliveryman'";


    $name_result = mysqli_query($conn,$name_sql);


    $name_row = mysqli_fetch_assoc($name_result);


?>


<p style="text-align:center;">

<b>Currently Assigned:</b>

<?php echo $name_row["name"]; ?>

</p>


<?php

}

else

{

?>

<p style="text-align:center;">

<b>Currently Assigned:</b> Not Assigned

</p>


<?php

}

?>



<form action="../controller/assign_process.php" method="POST">


<input type="hidden" 
name="order_id"
value="<?php echo $order_id; ?>">



<label>Select Delivery Man:</label>


<br>


<select name="deliveryman_id" required>


<option value="">

Select Delivery Man

</option>



<?php


while($row=mysqli_fetch_assoc($result))

{


?>


<option value="<?php echo $row["id"]; ?>">


<?php echo $row["name"]; ?>


</option>


<?php

}

?>


</select>



<br><br>



<input type="submit" value="Assign Delivery Man">


</form>



<br><br>



<center>


<a class="back-btn" href="view_orders.php">

Back To Orders

</a>


</center>



</body>

</html>