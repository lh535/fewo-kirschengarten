<!DOCTYPE html>
<html>
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div id='main'>
    <script>setTopOffset()</script>
      <h1>Anfahrt</h1>
      <div class='content-wrapper' id='description-content'>
        <div class='paragraph' style="flex-direction: row;">
          <div>
            <p style="margin: 0px;">
              <b>Adresse:</b><br>
              Ferienwohnung Kirschengarten<br>
              Sasbacherstr. 4<br>
              79346 Endingen-Königschaffhausen<br><br>
            </p>
            <img src="images/air_photo.jpg" alt="Luftbild des Hauses" style="width: 80%;">
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5325.629102017168!2d7.650359307991996!3d48.13309961923682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479115901af4558d%3A0x8e83736ecaf92e3!2sSasbacher%20Str.%204%2C%2079346%20Endingen%20am%20Kaiserstuhl!5e0!3m2!1sen!2sde!4v1601321773721!5m2!1sen!2sde" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="google-map"></iframe>
        </div>
        
        <div style="text-align: center;">
        <p> Anreise: ab 15:00 Uhr &nbsp; &nbsp; Abreise: bis 10:00 Uhr</p>
        </div>

        <div class="whitespace"> </div>
        <div class="whitespcae"> </div>
        <div>
          <h2>Wegbeschreibung</h2> 
          <img src="images/map.jpg" alt="Karte der Umgebung" id="drawn-map">
          <p>
            Von der Autobahn A5 nehmen Sie die Ausfahrt "Riegel". Fahren Sie rechts ab auf die L113 in Richtung "Endingen" und folgen Sie dem Straßenverlauf. Bei den folgenden beiden Kreisverkehren nehmen Sie zunächst die Ausfahrt nach Endingen, dann die nach Königschaffhausen.
          </p>
          <p> Nach ca. 1200 m müssen Sie nun links abbiegen, und den nächsten Kreisvekehr gleich bei der ersten Ausfahrt verlassen. Nach ungefähr 3 km sollten Sie das Dorf Königschaffhausen erreicht haben.
          </p>
          <p>
Fahren Sie nun geradeaus weiter und biegen Sie dann vor der Winzergenossenschaft in Richtung Sasbach rechts ab. Folgen Sie dem Straßenverlauf, kurz vor dem Ortsausgang nach dem letzten Haus biegen Sie rechts in die Sasbacherstraße ein. Nach etwa 200m haben Sie ihr Ziel erreicht.
          </p>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </body>
  <script type='text/javascript' src='scripts/navbar.js'></script>
</html>
