<!DOCTYPE html>
<html lang="en">
<head>
  <title>VU TKD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Top navigation bar -->
<?php include "phpTextFiles/menu.txt"; ?>


<!-- Left side links -->
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><h4>Relevant Links</h4></p><br>
      <?php include "phpTextFiles/sidelinks.txt"; ?>
    </div>


<!-- Main Body -->
    <div class="col-sm-7 text-left">
      <h1><strong>Form</strong></h1>
      <div class="undertitle">
        <p>This webpage was built by Michael Baek</a> </p>
      </div>
      <hr>

      <form action="form-results.php" method="post">
        Name: <input type="text" name="FirstName" value="" requried><br>
        Favorite Poomsae(Form):<br>
        <input type="radio" name="poomsae" value="1" required>Taegeuk 1<br>
        <input type="radio" name="poomsae" value="2">Taegeuk 2<br>
        <input type="radio" name="poomsae" value="3">Taegeuk 3<br>
        <input type="radio" name="poomsae" value="4">Taegeuk 4<br>
        <input type="radio" name="poomsae" value="5">Taegeuk 5<br>
        <input type="radio" name="poomsae" value="6">Taegeuk 6<br>
        <input type="radio" name="poomsae" value="7">Taegeuk 7<br>
        <input type="radio" name="poomsae" value="8">Taegeuk 8<br>
        <input type="submit" value="Submit">
      </form>
      <br>
      <p><?php echo $_POST["FirstName"] ?>, you entered: Taegeuk <?php echo $_POST["poomsae"]; ?></p>

      <hr>
      <?php
        $filehandle = fopen("phpTextFiles/formResults.txt","a+");
        $append = $_POST["poomsae"];
        fwrite($filehandle, $append."\n");
        fclose($filehandle);
      ?>
      <p>Poomsae Count:</p>
      <?php include "phpTextFiles/formResults.txt"; ?>
      <br><br>
    </div>

<!-- right sidebar -->
    <div class="col-sm-3 sidenav">
      <!-- google calendar on right sidebar -->
      <div class="well">
        <iframe src="https://calendar.google.com/calendar/embed?src=j50ur3977ff46gl8kmsnot7b88%40group.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="100%" height="375" frameborder="2" scrolling="no"></iframe>
      </div>
      <br><br>

    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid text-center">
  <p>For more information, please email villanovataekwondo@gmail.com</p>
</footer>

</body>
</html>
