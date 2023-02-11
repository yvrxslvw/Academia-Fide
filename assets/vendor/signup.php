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

	$admin = $_SESSION['login'];
	$action = 'Registered new Admin: ' . $_POST['login'] . '.';
	$time = date('Y-m-d H:i:s');
	mysqli_query($connect, "INSERT INTO `logs` (`admin`, `action`, `time`) VALUES ('$admin', '$action', '$time')");

	$_SESSION['regMsg'] = 'registered!';
	header('Location: /admin/panel');
?>