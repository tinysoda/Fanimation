<?php 
session_start();

// initializing variables
$username = "";
$email    = "";
$tel = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ag');

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

?>
