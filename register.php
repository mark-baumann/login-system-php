<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword"  required>
			</div><br>
			<div class="input-group">
				<button name="submit" class="btn btn-dark">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="_index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>