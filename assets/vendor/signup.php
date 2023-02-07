<?php
	session_start();
	require_once 'init.php';

	if(!$_POST['login']) {
		header('Location: /admin/panel');
		return;
	}
	if(!$_POST['password']) {
		header('Location: /admin/panel');
		return;
	}

	$login = md5($_POST['login']);
	$password = md5($_POST['password']);

	mysqli_query($connect, "INSERT INTO `admin` (`login`, `password`) VALUES ('$login', '$password')");
	$_SESSION['regMsg'] = 'registered!';
	header('Location: /admin/panel');
?>