<?php

if(!isset($_SESSION['user-name'])){
  header('Location: /login');
}

$title = 'Profile | Explore';