<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'>
    <title>Ferienwohnung Kirschengarten</title>
    <link rel='stylesheet' type='text/css' href='styles/normalize.css'>
    <link rel='stylesheet' type='text/css' href='styles/custom-reset.css'>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <script type='text/javascript' src='scripts/main.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet"> 

  </head>
  <body>
    <?php include 'header.php'; ?>

    <div id='main'>
    <script>setTopOffset()</script>
      <h1>Belegungsplan</h1>
      <div class='content-wrapper' id='description-content'>
        <div class='paragraph'>
          <iframe src='https://tportal.toubiz.de/kaiserstuhl-gastgeber/ukv/calendar/FIT00020070312698240'></iframe>
        </div>
        <div style="text-align: center;">
        <p> Anreise: ab 15:00 Uhr &nbsp; &nbsp; Abreise: bis 10:00 Uhr</p>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </body>
  <script type='text/javascript' src='scripts/navbar.js'></script>
</html>
