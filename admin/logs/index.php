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
			<h1>Logs</h1>
			<div class="logs">
				<h2>Admin</h2>
				<h2>Action</h2>
				<h2>Date & Time</h2>
			</div>
			<div class="menu_list scroll">
				<?php
					$result = mysqli_query($connect, "SELECT * FROM `logs`");
					for($i = 1; $i <= mysqli_num_rows($result); $i++) {
						$row = mysqli_fetch_assoc($result);
						
						echo '<div class="item logs">';
							echo '<p>' . $row['admin'] . '</p>';
							echo '<p>' . $row['action'] . '</p>';
							echo '<p>' . $row['time'] . '</p>';
						echo '</div>';
					}
				?>
			</div>
			<button onclick="location.href = '/admin';">Back</button>
		</div>
	</div>
</body>
</html>