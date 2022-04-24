<?php
header("X-Clacks-Overhead: GNU Terry Pratchett");
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div id='homepage-main'>
    <script>setTopOffset("#homepage-main")</script>
      <div id='homepage-logo'>
        <p id='home_small_logo'>Ferienwohnung</p>
        <p id='home_big_logo'>Kirschengarten</p>
      </div>
      <div id='home_button_div'>
        <button type=button onclick="location.href='beschreibung.php'" class='home_buttons' id='home_button_1'><b>BESCHREIBUNG</b></button>
        <button type=button onclick="location.href='preisliste.php'" class='home_buttons' id='home_button_2'><b>PREISE</b></button>
        <button type=button onclick="location.href='belegungsplan.php'" class='home_buttons' id='home_button_3'><b>BELEGUNGSPLAN</b></button>
      </div>
    <?php include 'footer.php'; ?>
    </div> 
  </body>
  <script type='text/javascript' src='scripts/navbar.js'></script>
</html>
