<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form action="validation.php" method="post">
	<h3>Sign in</h3>
	<label>Name</label>
	<input type="text" name="pname" required><br><br>

	<label>Phone</label>
	<input type="number" name="pnum" required ><br><br>

	<button type="submit" class="but">Log in</button><br>
	<h5>Do not have account? Register <a href="signup.php"</a>here</h5>
</form>
</body>
</html>