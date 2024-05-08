
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form class="login-form" action="login.php" method="post">
		<h1>Login</h1>
		
		<div class="input-group">
			<label for="username">Username:</label>
			<input type="text" name="username" id='password' required>
		</div>
		
		<div class="input-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id='password' required>
		</div>
		
		<button type="submit" class="submit-btn">Login</button>
		<?php
			include ("config.php");
			if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
				echo '<span style="color:#ff0000;text-align:center;">Wrong username / Password</span>';
				
			}
		?>
		<div class="links">
		</div>
	</form>

</body>
</html>
