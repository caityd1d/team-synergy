<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include 'initialize.php';

if (!is_numeric($_SESSION['user_id'])) {
    die('You need to log in');
} 

echo 'You\'re logged in ' . $_SESSION['email'];

?>

<!doctype html>
<html lang="en">
<head>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <?php include 'header.php';?>
    
</body>


</html>