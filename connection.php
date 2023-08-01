<?php 
    // Start the session (if not already started)
    session_start();
    // Database connection details
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "NEA";
    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


?>