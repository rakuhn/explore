<?php
$title = 'Journal | Explore';

if(!isset($_SESSION['user-name'])){
   header('Location: /login');
}

$userName = $_SESSION['user-name'];

if (!empty($_POST)) {

	if (isset($_POST['entry'])) {
		$entry = $_POST['entry'];

		$query = $database->prepare('INSERT INTO entries (user_name, entry) VALUES (:userName, :entry)');
		$query->bindParam(':userName', $userName, PDO::PARAM_STR);
		$query->bindParam(':entry', $entry, PDO::PARAM_STR);

		$result = $query->execute();
		header('Location: /journal');
	}

	if (isset($_POST['delete'])) {
		$entryId = $_POST['delete'];

		$deleteQuery = $database->prepare('DELETE FROM entries WHERE id = :entryId');
		$deleteQuery->bindParam(':entryId', $entryId, PDO::PARAM_STR);
		$deleteResult = $deleteQuery->execute();
		header('Location: /journal');
	}
	
}

$entryQuery = $database->prepare('SELECT date, entry, id FROM entries WHERE user_name = :userName ORDER BY date DESC');
$entryQuery->bindParam(':userName', $userName, PDO::PARAM_STR);

$entryQuery->execute();
$entryResults = $entryQuery->fetchAll();
