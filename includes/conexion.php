<?php
// Connecting to the database using mysqli_connect (Procedural)
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

// Create connection
$db = mysqli_connect($servername, $username, $password, $database);
mysqli_query($db, "SET NAMES 'utf8'");

// Start session
if(!isset($_SESSION)){
    session_start();
}

// Check connection
//if (!$db) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";

