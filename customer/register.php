<?php
?>

<!DOCTYPE html>
<html>

<head>

<title>Customer Registration</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>Customer Registration</h2>


<form action="../controller/register_process.php" method="POST">


<label>Name:</label>
<br>
<input type="text" name="name" required>

<br><br>


<label>Email:</label>
<br>
<input type="email" name="email" required>

<br><br>


<label>Phone:</label>
<br>
<input type="text" name="phone" required>

<br><br>


<label>Password:</label>
<br>
<input type="password" name="password" required>

<br><br>


<input type="submit" value="Register">


</form>


</body>

</html>