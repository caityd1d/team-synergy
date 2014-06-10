<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$mysqli = new mysqli("68.178.143.149", "teamsynergy", "Bootcamp1!", "teamsynergy");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
// echo $mysqli->host_info . "\n";

 ?>