<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


<h2>Admin Login</h2>



<form action="../controller/login_check.php" method="POST">


<input type="hidden" name="role" value="admin">



<label>Email:</label>

<br>

<input type="email"
name="email"
value="<?php echo $_COOKIE['admin_email'] ?? ''; ?>"
required>



<br><br>



<label>Password:</label>

<br>

<input type="password"
name="password"
required>



<br><br>



<div class="remember-box">
    <input type="checkbox" name="remember" value="1" id="remember">
    <label for="remember">Remember Me</label>
</div>

<input type="submit" value="Login">


</form>



<br><br>



<center>

<a class="back-btn" href="../index.php">

Back

</a>

</center>



</body>

</html>