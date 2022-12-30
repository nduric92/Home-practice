<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'head.php'; ?>   
  </head>
<body>
    <div class="grid-container">
      <?php require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout" id="tijelo">
            <h1>Kadrovi</h1>

            <table>
                  <thead>
                    <tr>
                      <th width="200">Ime i Prezime</th>
                      <th>Opis posla</th>
                      <th width="150">Godina u Tvrtki</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jon Trondlag</td>
                      <td>Generalni direktor u poduzecu ProductPlast.</td>
                      <td>23 godine</td>
                    </tr>
                    <tr>
                      <td>Igor Djordjevic</td>
                      <td>Vodja proizvodnje poduzeca.</td>
                      <td>17 godina</td>
                    </tr>
                    <tr>
                      <td>Kenneth Ramsland</td>
                      <td>Generalni sef proizvodnje.</td>
                      <td>20 godina</td>
                    </tr>
                  </tbody>
            </table><br><hr>
            <h3>Voditelji smjena sa radnicima</h3>

          <ol>
            <li>Adrian Krauze</li>
            <ol>
                <li>Matej Galic</li>
                <li>Trond Erik</li>
                <li>Peder Johansen</li>
                <li>Jan Iversen</li>
              </ol><hr>
            <li>Tobias Tveidt</li>
            <ol>
                <li>Finn Jensen</li>
                <li>Nemanja Duric</li>
                <li>Filip Sivric</li>
                <li>Jakov Delic</li>
              </ol><hr>
            <li>Ronie Ramsland</li>
              <ol>
                <li>Henok Tekle</li>
                <li>Gabriel Drca</li>
                <li>Ander Fuzin</li>
                <li>Gabriel Batistuta</li>
              </ol>
            
          </ol>


          </div>
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>
    </div>
   <?php include_once 'jskripte.php'; ?>
  </body>
</html>
kadrovi