<!DOCTYPE html>
<html lang="en">
<head>
  <title>VUTKD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="JavaScriptUse.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <!-- top navigation bar-->
  <?php include "phpTextFiles/menu.txt"; ?>


<!--left sidebar -->
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><h4>Relevant Links</h4></p><br>
      <?php include "phpTextFiles/sidelinks.txt"; ?>
    </div>


<!--main body -->
    <div class="col-sm-7 text-left">
      <h1><strong>JavaScript Use</strong></h1>

      <!-- first javascript function -->
      <hr>
      <h2>Fun Facts of the Team!</h2>
      <script src="JavaScriptUse.js"></script>
      <button type="button" onclick="funFactFunction()">Click me for a fun fact of the team!</button>
      <h4 id="funFact">-----</h4>

      <!-- second javascript function -->
      <hr>
      <h2>Next Practice</h2>
      <button type="button" onclick="nextPractice()">Click me for the next Practice Time!</button>
      <hr>
      <div onmouseup="disciplineOff(this)" onmousedown="disciplineHold(this)"><h4>Do you know the rules of Taekwondo?</h4></div>
      <button type="button" onclick="hint()">Need a hint?</button>
    </div>

<!--right sidebar -->
    <div class="col-sm-3 sidenav">
      <!-- google calendar -->
      <div class="well">
        <iframe src="https://calendar.google.com/calendar/embed?src=j50ur3977ff46gl8kmsnot7b88%40group.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="100%" height="375" frameborder="2" scrolling="no"></iframe>
      </div>

      <br><br>
    </div>
  </div>
</div>

<!--footer -->
<footer class="container-fluid text-center">
  <p>For more information, please email villanovataekwondo@gmail.com</p>
</footer>
</body>
</html>
