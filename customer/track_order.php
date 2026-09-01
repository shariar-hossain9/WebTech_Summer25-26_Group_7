<?php

session_start();

?>


<!DOCTYPE html>

<html>

<head>

<title>Track Order</title>
<link rel="stylesheet" href="../assets/css/style.css">


<script>


function checkStatus()

{

let order_id = document.getElementById("order_id").value;


let xhr = new XMLHttpRequest();



xhr.open(
"GET",
"../ajax/get_status.php?order_id="+order_id,
true
);



xhr.onload=function()

{

let data = JSON.parse(this.responseText);


document.getElementById("status").innerHTML=data.status;


}



xhr.send();


}



setInterval(checkStatus,3000);



</script>


</head>


<body>


<h2>Track Your Order</h2>


<label>Enter Order ID:</label>

<br>


<input type="text" id="order_id">


<br><br>


<h3>Status:</h3>


<h3 id="status">

Waiting...

</h3>
<br>

<center>

<a class="back-btn" href="dashboard.php">

Back To Dashboard

</a>

</center>

</body>


</html>