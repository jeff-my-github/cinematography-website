<?php
// db.php

// Database connection details
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'cinematography_portfolio');

// Enable error reporting for MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Attempt to establish a database connection
try {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Check for connection errors
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Optionally check if the database exists (can be useful for debugging)
    if (!$conn->select_db(DB_DATABASE)) {
        throw new Exception("Database does not exist or is not accessible.");
    }

} catch (Exception $e) {
    // Log the error message
    error_log($e->getMessage());
    die("Database connection error: " . $e->getMessage());
}
?>
