<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8" />
  <title>display</title>
</head>

<body>
<h2>Connect and display info</h2>
<?php
$servername = "webster.csc.villanova.edu";
$username = "plapro02";
$password = "Sp01382762";
$database = "plapro02";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<br /><br />
The info from the test table is:
<ul>

<?php
$sql = "SELECT * FROM test;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["num"]. ": " . $row["name"]. "</li>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</ul>
  <a href="dbupdate.php">Update table</a>
</body>
</html>
