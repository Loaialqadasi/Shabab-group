<?php 
// InfinityFree MySQL credentials
$host = 'dpg-d1bqnqodl3ps73eupri0-a'; 
$username = 'lostandfound'; 
$password = 'bXH9PCnHXpCcnXqTXfpKt41cESxQzYFs'; // Replace with your real password
$database = 'shabab'; 

// Create the MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) { 
    die("System maintenance in progress. Please try again later."); 
} 

// Set UTF-8 encoding
$conn->set_charset("utf8mb4"); 


?>
