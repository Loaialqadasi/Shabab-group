<?php 
// InfinityFree MySQL credentials
$host = 'sql202.infinityfree.com'; 
$username = 'if0_39240559'; 
$password = '12345AJFALO'; // Replace with your real password
$database = 'if0_39240559_users'; 

// Create the MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) { 
    die("System maintenance in progress. Please try again later."); 
} 

// Set UTF-8 encoding
$conn->set_charset("utf8mb4"); 


?>
