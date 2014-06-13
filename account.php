<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include 'initialize.php';

if (!is_numeric($_SESSION['user_id'])) {
    die('You need to log in');
} 

echo 'You\'re logged in ' . $_SESSION['email'];

// FOR DEBUGGING DELETE BEFORE USING
// session_destroy();
?>