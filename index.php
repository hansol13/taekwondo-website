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

<!-- top navigation bar-->
<?php include "phpTextFiles/menu.txt"; ?>


<!-- Left Sidebar -->
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><h4>Relevant Links</h4></p><br>
      <?php include "phpTextFiles/sidelinks.txt"; ?>
    </div>


<!-- Main Body -->
    <div class="col-sm-7 text-left">
      <h1><strong>Welcome to Villanova Taekwondo</strong></h1>
      <div class="undertitle">
        <p>This webpage was built by Michael Baek</a> </p>
      </div>
      <hr>
      <p>
        <img src="tkdbelttest.jpg" class="img-responsive" alt="Image not found">
      </p>

      <hr>
      <h3>Practice schedule</h3>
        <ul>
          <li>Monday    - 7:00pm -8:30pm  - Alumni Gym</li>
          <li>Wednesday - 9:00pm -10:30pm - Alumni Gym</li>
          <li>Saturday  - 11:00am-1:00pm  - Alumni Gym</li>
        </ul>
      <hr>
      <br>
      <br>
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

<!-- footer -->
<footer class="container-fluid text-center">
  <p>For more information, please email villanovataekwondo@gmail.com</p>
</footer>

</body>
</html>
