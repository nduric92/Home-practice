<?php 

if(isset($_POST['ime'])){
  require_once 'baza.php';
  $izraz = $veza->prepare('  
    insert into 
    radnik(ime,prezime) 
    values (:ime,:prezime);  
  ');
  $izraz->execute($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.php'; ?>
</head>
<body style="background-image:url(slike/body2.jpg);">
    <div class="container">
        <div class="container text-center" style="background-color:darkgrey;">
            <div class="row">
                <img src="slike/pp.jpg" alt="" height="300px">      
            </div>
            <?php include_once 'znavbar.php'; ?><br>
            <h1>Dodavanje radnika</h1>
            <hr>

            <form action="" method="post">
                
                <div class="mb-3 row" style="max-width:400px; margin: auto;">
                    <label for="ime">Ime</label>
                    <input type="text" class="form-control" name="ime" id="ime">
                </div>

                <div class="mb-3 row" style="max-width:400px; margin: auto;">
                    <label for="prezime">Prezime</label>
                    <input type="text" class="form-control" name="prezime" id="prezime">
                </div>
<!-- 
                <div class="mb-3 row" style="max-width:400px; margin: auto;">
                    <label for="oib">OIB</label>
                    <input type="number" class="form-control" name="oib" id="oib">
                </div>

                <div class="mb-3 row" style="max-width:400px; margin: auto;">
                    <label for="brojugovora">Broj ugovora</label>
                    <input type="text" class="form-control" name="brojugovora" id="brojugovora">
                </div>

                <div class="mb-3 row" style="max-width:400px; margin: auto;">
                    <label for="iban">IBAN broj</label>
                    <input type="text" class="form-control" name="iban" id="iban">
                </div>

                <input type="submit" class="btn btn-outline-success" value="Unesi">
-->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Dodaj Radnika
                </button>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Dodavanje radnika</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Spremi promjene!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Spremi</button>
                        </div>
                        </div>
                    </div>
                </div>



                

            </form>

            
          <hr>

          <a href="zradnici.php"><button type="button" class="btn btn-success btn-lg">Pogledaj radnike</button></a>

          <hr>



            
        </div>    
    </div>

    <?php include_once 'footer.php'; ?>
    <?php include_once 'skripte.php'; ?>
</body>
</html>