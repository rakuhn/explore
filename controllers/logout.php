<?php

$_SESSION['logged-in'] = null;
$_SESSION['user-name'] = null;
$userName = null;

header('Location: /home');
exit;