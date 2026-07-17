<?php
$servername = "sql313.infinityfree.com";
$username = "if0_42403521";
$password = ""ttWE6nRxGKEYLp"";
$dbname = "if0_42403521_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
