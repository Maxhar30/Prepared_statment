<?php 
$server = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'test';

$conn = new mysqli($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>