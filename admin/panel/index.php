<?php
	session_start();
	require_once '../../assets/vendor/init.php';
	if(!$_SESSION['login']) {
		header('Location: /');
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
		<div class="panel">
			<div class="menu main _active">
				<p>admin panel</p>
				<button onclick="openMenu('regAdm');">Register new Admin</button>
				<button onclick="openMenu('latestPosts');">Latest posts</button>
				<a href="/assets/vendor/signout.php">sign out</a>
			</div>
			<div class="menu regAdm">
				<p>register admin</p>
				<form action="/assets/vendor/signup.php" method="post" enctype="multipart/form-data">
					<label>Login</label>
					<input type="text" name="login">

					<label>Password</label>
					<input type="text" name="password">

					<?php
						if($_SESSION['regMsg'])
						{
							echo '<h6>' . $_SESSION['regMsg'] . '</h6>';
							unset($_SESSION['regMsg']);
						}
					?>

					<button>Register</button>
				</form>
				<button onclick="openMenu('main');">Back</button>
			</div>
			<div class="menu latestPosts">
				<p>latest posts</p>
				<?php
					$result = mysqli_query($connect, "SELECT * FROM `latest posts`");
					echo '<h4>Number of posts: ' . mysqli_num_rows($result) . '</h4>';
					for($i = 1; $i <= mysqli_num_rows($result); $i++) {
						$row = mysqli_fetch_assoc($result);
						
						echo '<div class="latestPosts__item">';
							echo '<form action="interPost.php" method="post">';
								echo '<label>' . $row['title'] . '</label>';
								echo '<input hidden name="id" value="' . $row['id'] . '">';
								echo '<button name="delete">Delete</button>';
								echo '<button name="edit">Edit</button>';
							echo '</form>';
						echo '</div>';
					}

					if($_SESSION['interMsg'])
					{
						echo '<h6>' . $_SESSION['interMsg'] . '</h6>';
						unset($_SESSION['interMsg']);
					}
				?>
				<form action="interPost.php" method="post">
					<button name="create">Create new</button>
				</form>
				<button onclick="openMenu('main');">Back</button>
			</div>
		</div>
	</div>
	
	<script src="../assets/js/script.js"></script>
</body>
</html>