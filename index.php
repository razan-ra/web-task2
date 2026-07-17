<?php
$servername = "sql313.infinityfree.com";
$username = "if0_42403521";
$password = "ttWE6nRxGKEYLp";
$dbname = "if0_42403521_database";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = mysqli_query($conn, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html>
<body>

<h2>Users Table</h2>

<table border="1" cellpadding="10">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Age</th>
  <th>Status</th>
  <th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td><a href='toggle.php?id=".$row['id']."'>Toggle</a></td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
