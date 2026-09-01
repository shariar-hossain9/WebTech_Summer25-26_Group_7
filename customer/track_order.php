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
    let order_id = document.getElementById("order_id").value.trim();
    let response = document.getElementById("status");
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            let data = JSON.parse(this.responseText);
            response.innerHTML = data.status;
        }
        else{
            document.getElementById("status").innerHTML = this.status;
        }
    }
    xhttp.open("POST", "../ajax/get_status.php", true);
    xhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhttp.send("order_id=" + encodeURIComponent(order_id));
}

setInterval(checkStatus, 3000);



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