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
            <h3>PROCES PROIZVODNJE</h3>
              <ul class="tabs" data-tabs id="example-tabs">
                <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Dio 1</a></li>
                <li class="tabs-title"><a href="#panel2">Dio 2</a></li>
                <li class="tabs-title"><a href="#panel3">Dio 3</a></li>
                <li class="tabs-title"><a href="#panel4">Dio 4</a></li>
                <li class="tabs-title"><a href="#panel5">Dio 5</a></li>
                <li class="tabs-title"><a href="#panel6">Dio 6</a></li>
              </ul>

              <div class="tabs-content" data-tabs-content="example-tabs">
                <div class="tabs-panel is-active" id="panel1">    
                  <div id="proces1">
                  </div>
                </div>
                <div class="tabs-panel" id="panel2">
                  <div id="proces2">
                  </div>
                </div>
                <div class="tabs-panel" id="panel3">
                  <div id="proces3">
                  </div>
                </div>
                <div class="tabs-panel" id="panel4">
                  <div id="proces4">
                  </div>
                </div>
                <div class="tabs-panel" id="panel5">
                  <div id="proces5">
                  </div>
                </div>
                <div class="tabs-panel" id="panel6">
                  <div id="proces6">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/crAx1aKPDsg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid-container">
      <?php require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout" id="tijelo2">          
            <div id="procesp">
              Proces uključuje zagrijavanje plastične ploce dok ne omekša, a zatim se prevlaci preko kalupa. Primjenjuje se vakuum koji usisava otopljenu plocu u kalup. Proces hladjenja nastupa nakon zavrsetka s vakumom. List se zatim izbacuje iz kalupa.
              <br><br>
              Vakuumsko oblikovanje je drevna tehnika koja se koristi za proizvodnju plastičnih proizvoda. To je najjednostavniji oblik procesa termoformiranja koji za rad koristi vakuumske usisne pumpe.
            </div>
          </div>
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>
    </div>
   <?php include_once 'jskripte.php'; ?>
  </body>
</html>