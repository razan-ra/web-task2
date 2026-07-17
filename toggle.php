<?php
$servername = "sql313.infinityfree.com";
$username = "if0_42403521";
$password = "ttWE6nRxGKEYLp";
$dbname = "if0_42403521_database";
$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT status FROM user WHERE id=$id");
$row = mysqli_fetch_assoc($result);
$currentStatus = $row['status'];

$newStatus = ($currentStatus == 0) ? 1 : 0;

mysqli_query($conn, "UPDATE user SET status=$newStatus WHERE id=$id");

header("Location: index.php");
exit();
?>
