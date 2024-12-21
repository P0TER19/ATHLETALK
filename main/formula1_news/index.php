<?php             session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>F1 - NEWS</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="landing-page">
      <div class="div">
        <div class="overlap">
          <div class="overlap-group">
            <div class="overlap-2">
              <div class="element-header-navigation">
                <div class="overlap-group-2">
                  <div class="items"></div>
                  <img class="motogp" src="https://c.animaapp.com/zGueASqA/img/motogp-1@2x.png" />
                </div>
                <img class="game" src="https://c.animaapp.com/zGueASqA/img/game-1@2x.png" />
                <img class="boxing-gloves" src="https://c.animaapp.com/zGueASqA/img/boxing-gloves-1@2x.png" />
                <img class="golf" src="https://c.animaapp.com/zGueASqA/img/golf-1@2x.png" />
                <img class="tennis-ball" src="https://c.animaapp.com/zGueASqA/img/tennis-ball-1@2x.png" />
                <img
                  class="img"
                  src="https://c.animaapp.com/zGueASqA/img/432869052-1424026551423628-6319360919788547078-n-1@2x.png"
                />
                <img
                  class="UFC-ultimate"
                  src="https://c.animaapp.com/zGueASqA/img/ufc-ultimate-fighting-championship-1@2x.png"
                />
              </div>
              <img class="image" src="https://c.animaapp.com/zGueASqA/img/image-18.png" />
              <img class="image-2" src="https://c.animaapp.com/zGueASqA/img/image-17.png" />
            </div>
            <div class="overlap-3">
              <img class="lewis-hamilton" src="https://c.animaapp.com/zGueASqA/img/lewis-hamilton@2x.png" />
              <div class="text-wrapper-2">F1</div>
              <div class="element-58">
                <div class="text-wrapper-3">NEXT EVENT IN</div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="text-wrapper-4">
                  <!-- Display the countdown timer in an element -->
<p id="timer" style="font-size: 40px; text-align: center;"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("January 19, 2025 14:0:0").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="timer"
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

                </div>
              </div>
              <div class="text-wrapper-5"><br>SEE MORE NEWS</div>
              <div class="rectangle"></div>
            </div>
            <div class="group">
              <div class="overlap-4">
                <img
                  class="element-61"
            src="../formula1_history/images/image4.png"
                /><center><span>
                <p class="website-done-by">Website Done By: Rayen Benbetaieb & Ahmad Chakhcha</p></span></center>
              </div>
            </div>
            <div class="overlap-5">
              <a href="https://www.skysports.com/f1/news/12433/13117838/lewis-hamilton-driving-at-pretty-similar-level-to-future-ferrari-team-mate-charles-leclerc-says-nico-rosberg"><img class="image-3" src="https://c.animaapp.com/zGueASqA/img/image-19.png" /></a>
              <a href="https://www.skysports.com/more-sports/motorsport/news/12433/13122452/british-gt-silverstone-500-live-on-sky-sports-f1-sky-tempesta-racing-aim-for-glory-in-new-ferrari"><img class="image-4" src="https://c.animaapp.com/zGueASqA/img/image-20.png" /></a>
            </div>
            <img class="image-5" src="https://c.animaapp.com/zGueASqA/img/image-24.png" />
          </div>
          <img class="image-6" src="https://c.animaapp.com/zGueASqA/img/image-21.png" />
          <img class="image-7" src="https://c.animaapp.com/zGueASqA/img/image-22.png" />
          <img class="image-8" src="https://c.animaapp.com/zGueASqA/img/image-23.png" />
        </div>
        <div class="element-header-navigation-2">
          <div class="items-2">

          <a href="../formula1_history/index.html"><div class="text-wrapper-6" style="font-size: 35px;">HISTORY</div>
          </a><div class="text-wrapper-6" style="font-size: 35px;">NEWS</div>
          <div class="text-wrapper-6" style="font-size: 35px;">QUIZ</div>
          <?php 
          if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
          echo '<div><a href="../../logout.php"><img src="../../logout_icon.png" width="20%"></a></div>';
          
          }else{
          echo '<div><a href="../../index.php"><img src="../../login_icon.png" width="20%"></a></div>';
          }
          ?>  
        </div>
        <a href="../home/index.php"><img
            class="element-63"
            src="../formula1_history/images/image4.png"
          /></a>
        </div>
      </div>
    </div>
  </body>
</html>
