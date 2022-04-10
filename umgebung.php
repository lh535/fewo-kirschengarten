<!DOCTYPE html>
<html>
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div id='main'>
    <script>setTopOffset()</script>
      <h1>UMGEBUNG</h1>
      <div class='content-wrapper' id='description-content'>
        <div class='thirds-container'>
          <div class='two-thirds'>
          <p>
          Eine der bekanntesten Attraktionen der Umgebung ist wohl der <a href="https://www.europapark.de/de">Europa-Park</a> in Rust. Im Themenpark gibt es nicht nur Achterbahnen, sondern auch zahlreiche Veranstaltungen, Restaurants und Entspannungsmöglichkeiten.<br>
 Von Königschaffhausen ist der Park ca. 18 km mit dem Auto entfernt.
          </p>
          <p>
          Zum erholsamen Erkunden des Kaiserstuhls bieten sich eine Tour mit dem <a href="https://www.naturgarten-kaiserstuhl.de/de-de/kaiserlich-erleben/rebenbummler">Rebenbummler</a> oder eine <a href="https://bfs-linie.de/">Schifffahrt bei der BFS</a> an.<br>
          Ebenfalls direkt in der Nähe finden Sie den <a href="https://abenteuer-im-wald.de/index.php/de/">Kenzinger Klettergarten</a>.
          </p>
          <p>
          Besonders gut geeignet ist der Kaiserstuhl für <a href=https://www.endingen.de/de/tourismus-und-freizeit/urlaubserlebnisse/wandern>Wanderungen</a>, <a href="https://www.endingen.de/de/tourismus-und-freizeit/urlaubserlebnisse/radfahren">Radtouren</a> und auch Stadttouren im Elsass und Schwarzwald. Besuchen Sie auch die Seite des <a href="https://www.naturgarten-kaiserstuhl.de/de-de">Naturgarten Kaiserstuhl</a>, um weitere Eindrücke für mögliche Ausflugsziele zu gewinnen.
          </p>
          <p>
          In der Stadt Endingen können Sie ebenfalls einiges erleben - einen Eindruck einiger Veranstaltungen finden Sie hier: <a href="https://www.endingen.de/de/tourismus-und-freizeit/urlaubserlebnisse/stadterlebnisse">Stadt Endingen</a>
          </p>
        </div>
        <div class='one-third'>
          <img src="images/kaiserstuhl_air.jpg" class="image-gallery" alt="Luftbild von Königschaffhausen">
          <img src="images/butterfly.jpg" class="image-gallery" alt="Blume mit Biene und Schmetterling">
          <img src="images/hill.jpg" class="image-gallery" alt="Blumen am Kaiserstuhl">
          <img src="images/kaiserstuhl.jpg" class="image-gallery" alt="Kaiserstuhl">

        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
    </div>

    <!-- Image Gallery -->
    <div class='modal'>
      <span class='close-button' onclick='closeGallery()'>&times;</span>
      <img src="" alt="gallery image" class="gallery-content">
      <span class='prev-button' onclick='prevPicture()'>&#10094;</span>
      <span class='next-button' onclick='nextPicture()'>&#10095;</span>
      <div id="imagenum"></div>
    </div>
    <script>initGallery();</script>
    <script>checkClose();</script>
  </body>
  <script type='text/javascript' src='scripts/navbar.js'></script>
</html>
