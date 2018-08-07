<?php

require_once('configuration.php');

session_start();

$address = $_SERVER['REQUEST_URI'];
$request = strtok($address, '?');

if ($request === '/')
{
	$request = '/home';
}

if (!isset($title)) {
	$title = 'Explore';
}

$view = 'views' . $request . '.php';
$controller = 'controllers' . $request . '.php';

$quoteQuery = $database->prepare('SELECT quote FROM quotes ORDER BY RANDOM() LIMIT 1');
$quoteQuery->execute();
$quoteResult = $quoteQuery->fetchAll();

if (file_exists($controller)) {
		include($controller);
}

if (!file_exists($view) && !file_exists($controller))
{
	http_response_code(404);
	$view = 'views/404.php';
}

if (file_exists($view))
{
	include('includes/header.php');
	include($view);	
	include('includes/footer.php');
}

function exploreQuote() {
	global $quoteResult;
	foreach($quoteResult as $quote) { 
		print_r($quote['quote']);
	}
}
