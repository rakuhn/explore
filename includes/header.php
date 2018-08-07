<!doctype html>

<html lang="en">
<head>
	<title><?php echo $title; ?></title>
		<meta charset="utf-8">
		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
		<div>
			<div>
				<a href="/home" class="navigation"><h1>Explore</h1></a>
			</div>
			<nav>
				<div class="navigationDiv">
					<a href="/home" class="navigation">home</a> 
				</div>
				<div class="navigationDiv">
					<a href="/places" class="navigation">places</a>
				</div>
				<div class="navigationDiv">
					<a href="/gear" class="navigation">gear</a>
				</div>
				<?php
					if (isset($_SESSION['logged-in'])) {
				?>
				<div class="navigationDiv">
					<a href="/journal" class="navigation">journal</a>
				</div>
				<div class="navigationDiv">
					<a href="/profile" class="navigation">profile</a>
				</div>
				<div class="navigationDiv">
					<a href="/logout" class="navigation">logout</a>
				</div>
				<?php
					} else {
				?>
				<div class="navigationDiv">
					<a href="/login" class="navigation">login</a>
				</div>
				<?php
					}
				?>
			</nav> 
		</div>
	</header>
<section>