<?php

$title = 'Create User | Explore';

if (!empty($_POST)) {

	$userName = $_POST['user-name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	$query = $database->prepare('SELECT COUNT(*) FROM users WHERE username = :userName');
	$query->bindParam(':userName', $userName, PDO::PARAM_STR);
	$query->execute();

	if ($query->fetchColumn()) {
		$usernameTaken = true;
	} else {

		$query = $database->prepare('INSERT INTO users (username, email, password) VALUES (:userName, :email, :hashedPassword)');

		$query->bindParam(':userName', $userName, PDO::PARAM_STR);
		$query->bindParam(':email', $email, PDO::PARAM_STR);
		$query->bindParam(':hashedPassword', $hashedPassword, PDO::PARAM_STR);

		$result = $query->execute();

		$userName = $_POST['user-name'];
		$password = $_POST['password'];

		$_SESSION["logged-in"] = true;
		$_SESSION["user-name"] = $userName;

		$usernameTaken = false;

		header('Location: /profile');
		exit;
	}
}