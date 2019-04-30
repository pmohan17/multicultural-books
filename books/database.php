<?php
$server   = "localhost";
$database = "priyamoh_books";
$username = "priyamoh_books";
$password = "Pm051698!";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
?>
