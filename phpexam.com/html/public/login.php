<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-container">
		<h1>Login</h1>
		<form action="./controller/login-controller.php" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Login">
		</form>
		<p>Don't have an account? <a href="./signup.php">Register here</a></p>
	</div>
</body>
</html>
