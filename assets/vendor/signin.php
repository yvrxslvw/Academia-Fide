<?php
	session_start();
	require_once 'init.php';

	$login = md5($_POST['login']);
	$password = md5($_POST['password']);

	$admin_check = mysqli_query($connect, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
	if(!mysqli_num_rows($admin_check)) {
		header('Location: /');
		return;
	}

	$_SESSION['login'] = true;
	header('Location: /admin/panel');
?>