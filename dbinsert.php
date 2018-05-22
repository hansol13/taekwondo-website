<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8" />
  <title>Welcome</title>
</head>

<body>

<?php
if (strcmp($_POST["secret"],"vutkd") != 0)
{
  echo "Sorry.";
}
else
{
  $servername = "webster.csc.villanova.edu";
  $username = "plapro02";
  $password = "Sp01382762";
  $database = "plapro02";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  $sql = "INSERT INTO test VALUES(" . $_POST['number'] . ",\"" .
          $_POST['element'] . "\");";

// echo $sql;

  $result = $conn->query($sql);

  $conn->close();
   echo "Thanks!";
}
?>
  <p><a href="db.php">Go back to Database show</a></p>
</body>
</html>
