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
            <h1>Pregled radnika</h1>
            <hr>

            <?php 
                try{

                    $dsn='mysql:host=localhost;dbname=proizvodnja;charset=utf8';

                    $parametri=[
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                    ];

                    $veza = new PDO($dsn,'root','',$parametri);

                    $izraz = $veza->prepare('select * from radnik');

                    $izraz->execute();
                
                    $rs = $izraz->fetchAll();

                    foreach($rs as $red):
                    ?>
                    <h6><?=$red->ime ?> <?=$red->prezime ?></h1>
                    <?php
                    endforeach;

                }catch(Exception $e){
                    switch($e->getCode()){
                        case 1049:
                            echo 'Provjerite naziv baze podataka';
                            break;
                        case 2002:
                            echo 'Provjerite naziv računala ili domene gdje se nalazi baza';
                            break;
                        case 1045:
                            echo 'Provjerite korisnika i lozinku na bazi';
                            break;
                        default:
                            echo 'Dogodio se problem. Kontaktirajte nas na XXXXXX';
                            break;
                    }
                }          
          ?>
          <hr>

          <a href="dodajradnika.php"><button type="button" class="btn btn-success btn-lg">Dodaj novog radnika</button></a>

          <hr>



            
        </div>    
    </div>

    <?php include_once 'footer.php'; ?>
    <?php include_once 'skripte.php'; ?>
</body>
</html>