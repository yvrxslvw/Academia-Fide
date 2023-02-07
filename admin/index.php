<?php 
	session_start();
	if($_SESSION['login']) {
		header('Location: panel');
		return;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/admin/assets/css/style.css">
	<link rel="shortcut icon" href="/assets/images/ico.png" type="image/png">
	<title>Academia Fide | ADMIN</title>
</head>
<body>
	<div class="wrapper">
		<div class="auth">
			<form action="/assets/vendor/signin.php" method="post" enctype="multipart/form-data">
				<label>Login</label>
				<input type="text" name="login">

				<label>Password</label>
				<input type="password" name="password">

				<button>Sign in</button>
			</form>
		</div>
	</div>
</body>
</html>