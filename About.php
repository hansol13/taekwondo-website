<!DOCTYPE html>
<html lang="en">
<head>
  <title>VUTKD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>


<!-- top navigation bar -->
<?php include "phpTextFiles/menu.txt"; ?>
<!--left sidebar -->
<div class="container-fluid text-center">
  <div class="row content">

    <!-- list of links on the left side bar -->
    <div class="col-sm-2 sidenav">
      <p><h4>Relevant Links</h4></p><br>
      <?php include "phpTextFiles/sidelinks.txt"; ?>
    </div>

<!--main body -->
    <div class="col-sm-7 text-left">
      <h1><strong>About Us</strong></h1>
      <div class="undertitle"><p>This webpage was built by Michael Baek</a> </p></div>
      <hr>
      <p><img src="competition.jpg" class="img-responsive" alt="Image not found"></p>
      <hr>
      <h3>About the Team</h3>
      <p>
        Villanova Club Taekwondo is filled with students of different martial arts backgrounds as well as
        members who have no prior experience, and cultivate their skills through our club.
        We are a competitive Club Sports team, participating in the Eastern Collegiate Taekwondo Conference
        and we compete about 3-4 times a year at universities such as MIT, Cornell, Brown, and Princeton. <br><br>
        Last spring, we had our first member go through all four years of our curriculum and she was the first
        person in Villanova Taekwondo history to earn a black belt strictly through our club, under the guidance
        of Master Garrett White. We currently have 24 club members and our numbers are growing every year.
        Recently, our Men's Sparring B-Team (Nathan Cheong, Ryan Searcy, Patrick Egan) won Villanova Taekwondo's first sparring medal.
      </p>
      <h3>History</h3>
      <p>Villanova Club Taekwondo was founded in 2011 under Samuel White (class of '15)</p>
      <p>
        The previous presidents of the club have been
        <ul>
          <li>Samuel White '15</li>
          <li>Jon Wan '16</li>
          <li>Olivia Eltz '17</li>
          <li>Michael Baek '18</li>
        </ul>
      </p>
      <p>
        <h3>Our Masters:</h3>
        <ul>
          <li><a href="https://jhc-tkd.com/">Grandmaster Ji Ho Choi</a></li>
          <li><a href="https://www.maia-westfield.com/">Grandmaster Bongdeok Lim</a></li>
          <li><a href="http://apextigers.com/">Master Kwon</a></li>
          <li>Master Garrett White</li>
        </ul>
      </p>
      <br>
      <h4>Some of our achievements are:</h2>
        <ul>
          <li>
            <a href="https://www.ectc-online.org/season-standings">ECTC Division III Rank 5</a>
          </li>
          <li>Holder of the first and only Taekwondo Poomsae (Forms) Gold Medal earned by a Division III School</li>
          <li>First team to be ranked without the assistance of a full time coach</li>
          <li>Only team to ever make it to the semi finals of an ECTC sanctioned competition without coaching</li>
          <li>Performers for the 2018 Asian Expo at Villanova</li>
        </ul>
      <hr>
      <br><br>
    </div>

<!--right sidebar -->
    <div class="col-sm-3 sidenav">
      <!-- google calendar on right sidebar -->
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
