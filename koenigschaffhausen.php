<!DOCTYPE html>
<html>
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div id='main'>
    <script>setTopOffset()</script>
      <h1>KÖNIGSCHAFFHAUSEN</h1>
      <div class='content-wrapper' id='description-content'>
        <div class='thirds-container'>
          <div class='two-thirds'>
          <p>
            Das Dorf Königschaffhausen, ein Stadtteil von Endingen,  liegt idyllisch eingebettet zwischen Kaiserstuhl und 
Rhein und ist geprägt vom Obst- und Weinbau.
          </p>
          <p>
          Es ist ein idealer Ausgangsort für Wanderungen, Radtouren und Ausflüge.<br> 
Im April findet auch jährlich in und um Königschaffhausen die <a href="https://koenigschaffhausen-am-kaiserstuhl.de/bluetenwanderung/">Blütenwanderung</a> statt. Hier können Sie die Umgebung und ausgewählte Angebote aus der lokalen Gastronomie geniessen.<br>
</p>
<p>
Im Dorf selbst finden Sie eine Bäckerei, zwei Metzgereien, einen Bauernladen, ein Cafe und 3 Restaurants. Zudem gibt es eine beliebte <a href="https://eismanufaktur-baden.de/die-eismanufaktur/">Eismanufaktur</a>, in der Sie Eis aus heimischen Zutaten genießen können.<br>
Wenn Sie ein wenig Wein aus der Region probieren möchten, können Sie bei der örtlichen <a href="https://www.kk-weine.de/">Winzergenossenschaft</a> vorbeischauen.<br>
Weitere Einkaufsmöglichkeiten gibt es in der Stadt Endingen.
</p>
<p>
Königschaffhausen hat einen Bahnhof und ist gut an den Rest des Kaiserstuhls angebunden. Mithilfe der <a href="https://www.schwarzwald-tourismus.info/planen-buchen/konus-gaestekarte">Konus-Karte</a> können Sie unbegrenzt Bus und Bahn nutzen.<br>
Falls Sie herausfinden wollen, was es in der Umgebung zu entdecken gibt, besuchen Sie doch auch unsere Seite zum <a href="umgebung.php">Kaiserstuhl</a>.
</p>
<p>
          <p>
            Weitere Informationen zu Königschaffhausen finden Sie auf  der Website des <a href="https://koenigschaffhausen-am-kaiserstuhl.de/#kaiserstuehler">Tourismusvereins</a>.
          </p>
          </div>
          <div class='one-third'>
            <img src="images/blossoms.jpg" class="image-gallery" alt="Kirche von Königschaffhausen">
            <img src="images/koenigschaffhausen.jpg" class="image-gallery" alt="Bild von Königschaffhausen">
            <img src="images/cherries.jpg" class="image-gallery" alt="Bild von Kirschen">
            <img src="images/sunflower.jpg" class="image-gallery" alt="Sonnenblume">
            <img src="images/sunset.jpg" class="image-gallery" alt="Sonnenuntergang"> 
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
