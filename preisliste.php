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
      <h1>Preisliste</h1>
      <div class='content-wrapper just-text' id='description-content'>
        <h2>Preise<p class="small-text">(gültig bis 31.12.2020)</p></h2>
        <table id="price-table">
          <tr>
            <td></td>
            <th>2 Personen</th>
            <th>3 Personen</th>
            <th>4 Personen</th>
          </tr>

          <tr>
            <th>3-4 Übernachtungen</th>
            <td>67,-€</td>
            <td>72,-€</td>
            <td>77,-€</td>
          </tr>

          <tr>
            <th>5-8 Übernachtungen</th>
            <td>62,-€</td>
            <td>67,-€</td>
            <td>72,-€</td>
          </tr>

          <tr>
            <th>9-15 Übernachtungen</th>
            <td>58,-€</td>
            <td>63,-€</td>
            <td>68,-€</td>
          </tr>

          <tr>
            <th>an 16 Übernachtungen</th>
            <td>55,-€</td>
            <td>60,-€</td>
            <td>65,-€</td>
          </tr>
          
          <tr>
            <td></td>
            <td colspan='3'>(Preise gelten pro Übernachtung, inkl. 7% MWSt)</td>
          </tr>
        </table>
        <p>Endreinigung, Bettwäsche, Hand- und Geschirrtücher und alle Nebenkosten (Strom, Wasser, Heizung) sind inklusive.</p><br>
        <p>Kurtaxe wird seperat berechnet:</p>
        <h2>Kurtaxe<p class="small-text">(ausgewiesen wie zur Zeit gültig, Änderungen jederzeit möglich)</p></h2>
        <table>
          <tr>
            <th>7-14 Jahre</th>
            <td> 0,75€ / Person / Übernachtung</td>
          </tr>
          <tr>
            <th>ab 15 Jahren</th>
            <td> 1,50€ / Person / Übernachtung</td>
          </tr>
        </table>
        <p>In diesem Preis inklusive ist auch Konus-Gästekarte, die sie zur kostenlosen Benutzung von öffentlichen Verkehrsmitteln berechtigt. Mehr Infos hierzu auch unter diesem Link: <a href="https://www.schwarzwald-tourismus.info/planen-buchen/konus-gaestekarte">Konus-Gästekarte</a>
      </div>
    <?php include 'footer.php'; ?>
    </div>
  </body>
  <script type='text/javascript' src='scripts/navbar.js'></script>
</html>
