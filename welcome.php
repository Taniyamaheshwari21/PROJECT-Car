<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&family=Mukta:wght@500&family=Open+Sans&family=Playfair+Display:wght@500;600&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Welcome - <?php echo $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'nav.php' ?>

    <audio autoplay loop>
    <source src="audio2.mp3" type="audio/mpeg">
    Your browser does not support the audio tag.
  </audio>

    <div class="video-container">
      <video autoplay loop muted width="1519">
        <source src="video2.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="overlay"></div>
    </div>
    
    <div class="text">
      <h2 id="helo">Welcome</h2><p id="hel"><i> <?php echo $_SESSION['username']?></i></p>
      <!-- <p>"Power, Beauty, and Soul"</p> -->
      <h2>DB12</h2>
      <p>Redefining and reinventing what it means to be a tourer. An icon risen from 73 years of category defining marvels. Cutting through continents, bruising benchmarks and taming tradition.</p>
    </div>


    <div class="stats">
        <p>TOP SPEED <span id="mph">MPH</span><br><span class="num">202</span></p>
        <p>0-62 MPH <span id="sec">seconds</span><br><span class="num">3.6</span></p>
        <p>POWER <span id="ps">PS</span><br><span class="num">680</span></p>
    </div>
    

    <div class="gal">
        <span id="engine"><img src="engine.jpg" onclick="toggle()"/></span>
        <img src="image3.jpg" />
        <img src="brakes.jpg" />
        <img src="wheels.jpg" />
    </div>
    <div class="belo">
        <a href="engine.php" id="i1">Engine</a>
        <a href="performance.php" id="i2">Performance</a>
        <a href="brakes.php" id="i3">Brakes</a>
        <a href="wheels.php" id="i4">Wheels</a>
    </div>
    <div class="prebook">
        <a href="form.php">PREBOOK</a>
    </div>
    
  </body>
</html>
