<?php
	session_start();
	require_once '../../assets/vendor/init.php';
	if(!$_SESSION['login']) {
		header('Location: /');
		return;
	}

	$id = $_POST['id'];
	$titleEs = $_POST['titleEs'];
	$titleEn = $_POST['titleEn'];
	$titleRu = $_POST['titleRu'];
	$titleLink = $_POST['titleLink'];
	$textEs = $_POST['textEs'];
	$textEn = $_POST['textEn'];
	$textRu = $_POST['textRu'];

	if(isset($_POST['delete'])) {
		mysqli_query($connect, "DELETE FROM `latest posts` WHERE `id` = '$id'");
		mysqli_query($connect, "ALTER TABLE `latest posts` AUTO_INCREMENT = 1");
		$_SESSION['interMsg'] = 'deleted!';
		header('Location: /admin/panel');
	} elseif(isset($_POST['edited'])) {
		mysqli_query($connect, "UPDATE `latest posts` SET 
			`title` = '$titleEs', 
			`title_en` = '$titleEn', 
			`title_ru` = '$titleRu', 
			`title link` = '$titleLink', 
			`text` = '$textEs', 
			`text_en` = '$textEn', 
			`text_ru` = '$textRu' 
			WHERE `id` = '$id'");

		$_SESSION['interMsg'] = 'edited!';
		header('Location: /admin/panel');
	} elseif(isset($_POST['created'])) {
		mysqli_query($connect, "INSERT INTO `latest posts` (
			`title`, 
			`title_en`, 
			`title_ru`, 
			`title link`, 
			`text`, 
			`text_en`, 
			`text_ru`
		) VALUES (
			'$titleEs', 
			'$titleEn', 
			'$titleRu', 
			'$titleLink', 
			'$textEs', 
			'$textEn', 
			'$textRu'
		)");
		$_SESSION['interMsg'] = 'created!';
		header('Location: /admin/panel');
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
			<?php
				if(isset($_POST['edit'])) {
					$result = mysqli_query($connect, "SELECT * FROM `latest posts` WHERE `id` = '$id'");
					$row = mysqli_fetch_assoc($result);

					echo '<form class="inter" action="interPost.php" method="post">';
						echo '<input hidden value="' . $id . '" name="id">';
						echo '<label>Title Spanish</label>';
						echo '<textarea type="text" name="titleEs">' . $row['title'] . '</textarea>';
						echo '<label>Title English</label>';
						echo '<textarea type="text" name="titleEn">' . $row['title_en'] . '</textarea>';
						echo '<label>Title Russian</label>';
						echo '<textarea type="text" name="titleRu">' . $row['title_ru'] . '</textarea>';
						echo '<label>Title Link</label>';
						echo '<textarea type="text" name="titleLink">' . $row['title link'] . '</textarea>';
						echo '<label>Text Spanish</label>';
						echo '<textarea type="text" name="textEs">' . $row['text'] . '</textarea>';
						echo '<label>Text English</label>';
						echo '<textarea type="text" name="textEn">' . $row['text_en'] . '</textarea>';
						echo '<label>Text Russian</label>';
						echo '<textarea type="text" name="textRu">' . $row['text_ru'] . '</textarea>';
						echo '<button name="edited">Edit</button>';
					echo '</form>';
				} elseif(isset($_POST['create'])) {
					echo '<form class="inter" action="interPost.php" method="post">';
						echo '<label>Title Spanish</label>';
						echo '<textarea type="text" name="titleEs"></textarea>';
						echo '<label>Title English</label>';
						echo '<textarea type="text" name="titleEn"></textarea>';
						echo '<label>Title Russian</label>';
						echo '<textarea type="text" name="titleRu"></textarea>';
						echo '<label>Title Link</label>';
						echo '<textarea type="text" name="titleLink"></textarea>';
						echo '<label>Text Spanish</label>';
						echo '<textarea type="text" name="textEs"></textarea>';
						echo '<label>Text English</label>';
						echo '<textarea type="text" name="textEn"></textarea>';
						echo '<label>Text Russian</label>';
						echo '<textarea type="text" name="textRu"></textarea>';
						echo '<button name="created">Create new</button>';
					echo '</form>';
				}
			?>
			<a href="../">Back</a>
		</div>
	</div>
</body>
</html>