<?php 

$configuration = json_decode(@file_get_contents('configuration.json'));

try {
		$database = new PDO($configuration->dsn, $configuration->user, $configuration->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
}