<?php

$title = 'Login | Explore';
$userName = null;
$password = null;
$hashedPassword = null;
$_SESSION['user-name'] = null;
$_SESSION['password'] = null;
$_SESSION['logged-in'] = null;

if (!empty($_POST['user-name'])) {
	$userName = $_POST['user-name'];
	$password = $_POST['password'];
	$_SESSION["user-name"] = $userName;
	$_SESSION["password"] = $password;

	$query = $database->prepare("SELECT users.password FROM users WHERE users.username = :userName");
	$query->bindParam(':userName', $userName, PDO::PARAM_STR);
	$query->execute();

	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$hashedPassword = $row['password'];
	};

	if (!empty(password_verify($password, $hashedPassword))) {
		$_SESSION['logged-in'] = true;
		session_start();
		header('Location: /profile');
		exit;
	} else {
		$incorrectPassword = true;
	}
} 