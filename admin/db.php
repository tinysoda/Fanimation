<?php 
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '12345678', 'fanimation');

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

?>
