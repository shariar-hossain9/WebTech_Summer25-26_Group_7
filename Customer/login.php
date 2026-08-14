<!DOCTYPE html>
<html>
 
<head>
 
<title>Delivery Man Login</title>
 
</head>
 
 
<body>
 
 
<h2>Delivery Man Login</h2>
 
 
<form action="../controller/login_check.php" method="POST">
 
 
<input type="hidden" name="role" value="deliveryman">
 
 
<label>Email:</label>
 
<br>
 
<input type="email"
name="email"
value="<?php echo $_COOKIE['remember_email'] ?? ''; ?>"
required>
 
 
<br><br>
 
 
<label>Password:</label>
 
<br>
 
<input type="password" name="password" required>
 
 
<br><br>
<input type="checkbox" name="remember" value="1">
 
Remember Me
 
<br><br>
 
<input type="submit" value="Login">
 
 
</form>
 
 
</body>
 
</html>