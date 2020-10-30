<!DOCTYPE html>
<html>
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div id='main'>
    <script>setTopOffset()</script>
      <h1>Beschreibung</h1>
      <div class='content-wrapper' id='description-content'>
          <div class='main-images' >
            <img class='big-img image-gallery' src='images/front_2.jpg' alt='Vorderseite des Hauses'>
            <div class='small-img'>
              <img src='images/air_photo.jpg' class='image-gallery' alt='Luftbild' style='margin-top: 0px;'>
              <img src='images/church.jpg' class='image-gallery' alt='Königschaffhausen'>
              <img src='images/bench.jpg' class='image-gallery' alt='Eingangsbereich'>
            </div>
          </div>

          <p class='main-text'>
            Unsere Ferienwohnung liegt inmitten der Natur am Ortsrand von Königschaffhausen, mit einem herrlichen Blick über den Kaiserstuhl.
Umgeben von Obstbäumen und in absolut ruhiger Lage bieten wir Ihnen Erholung und Entspannung pur.
Die Wohnung wurde vom Deutschen Tourismus-Verband mit 5 Sternen klassifiziert.
          </p>
        <div class='whitespace'>
        </div>
        <div class='paragraph'>
          <p class='main-text'>
            Die Ferienwohnung verfügt über großzügige, helle Räume mit insgesamt 85m<sup>2</sup> Wohnfläche und einer 12m<sup>2</sup> großen überdachten Terasse.
Die Zimmer sind komfortabel und modern eingerichtet. 
          </p>
        <div class='two-images'>
          <img src='images/terrace.jpg' class='image-gallery' alt='Terasse'>
          <img src='images/combined.jpg' class='image-gallery' alt='Eß- und Wohnbereich'>
        </div>
      </div>

      <div class='paragraph'>
        <p class='main-text'>
          Im Essbereich erwartet Sie eine komplett eingerichtete Einbauküche.<br>
 Gleich daneben finden sie einen Wohnbereich mit SAT-TV, der zum Entspannen einlädt. 
        </p>
        <div class='two-images'>
          <img src='images/kitchen.jpg' class='image-gallery' alt='Küche'>
          <img src='images/couch.jpg' class='image-gallery' alt='Wohnzimmer'>
        </div>
      </div>

      <div class='paragraph'>
      <p class='main-text'>
        Die zwei bequemen Schlafzimmer mit Aussicht ins nahe Elsass (Vogesen) besitzen ausreichend Verstauungsmöglichkeiten.
      </p>
      <div class='two-images'>
          <img src='images/bed.jpg' class='image-gallery' alt='Schlafzimmer mit Doppelbett'>
          <img src='images/bedroom_small.jpg' class='image-gallery' alt='Schlafzimmer mit zwei Einzelbetten'>
      </div>
    </div>

      <div class='paragraph'>
      <p class='main-text'>
        Das Badezimmer mit Dusche und Badewanne lädt nach einem erlebnisreichen Tag zum Entspannen ein.<br>
        Im Erdgeschoß finden Sie eine seperate Waschküche und einen großen Flur, in dem Sie beispielsweise Ihre Fahrräder sicher unterbringen können.
      </p>
      <div class='two-images'>
          <img src='images/bath_1.jpg' class='image-gallery' alt='Badezimmer'>
          <img src='images/entrance.jpg' class='image-gallery' alt='Eingangsbereich und Flur'>
      </div>
    </div>
  
      <p class='main-text'>
        Hier finden sie noch einen detailierten Grundriss der Ferienwohnung: <a href='images/grundriss_redraw.png' class='image-gallery'>Grundriss</a>
      </p>
<p>Die Waschküche und Unterstellmöglichkeiten befinden sich im Erdgeschoss und sind demnach hier nicht abgebildet.</p>
    </div>
  <?php include 'footer.php'; ?>
    </div>

    <!-- Image Gallery -->
    <div class='modal'>
      <span class='close-button' onclick='closeGallery()'>&times;</span>
      <img src="" alt="gallery image" class="gallery-content">
      <span class='prev-button' onclick='prevPicture()'>&#10094;</span>
      <span class='next-button' onclick='nextPicture()'>&#10095;</span>
    </div>
    <script>initGallery();</script>
  </body>
  <script type='text/javascript' src='scripts/navbar.js'></script>
</html>
