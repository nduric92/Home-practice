<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'head.php'; ?>
    </head>
    <body>
        <div class="grid">

            <!-- nav bar pocetak -->
            <nav class="navbar">
                <div class="navname">Plast Product                    
                </div>
                    <a href="#" class="toggle-button">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </a>
                <div class="navbar-links">
                        <ul>
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="product.php">Proizvodi</a></li>
                            <li><a href="proces.php">Proces Proizvodnje</a></li>
                            <li><a href="menadzment.php">Menadzment</a></li>
                            <li><a href="onama.php">O nama</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                </div>
            </nav>
                        
             <!-- Picture -->
            <div class="large-6 medium-6 small-12 cell">
                <img src="slike/pp.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
            </div>

             <!-- Sadrzaj na pocetnoj -->
            <div class="text1">
                <h1>Proizvodi vakumskog oblika koriste se u gotovo svim industrijama</h1>
                <p>Veličina redovne serije kreće se od 50 do 10 000 jedinica godišnje. Proces karakteriziraju niski troškovi alata, niski početni troškovi, kratka vremena i visok stupanj fleksibilnosti u pogledu odabira materijala.</p>
            </div>
            <div class="slikaindex">
            <img src="slike/volvo1.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
            <div class="text1">
            Od naših tipičnih proizvoda možemo spomenuti ploče za automobile: autobuse, kamione, građevinske strojeve i prenamjenu automobila. Industrija rashladnih sredstava: Rashladna oprema za komercijalne kuhinje, rashladne jedinice i druge srodne industrije.<hr style="width:80%">
            Pomoćni proizvodi: Razna pomagala za osobe s invaliditetom, kao što su invalidska kolica, skuteri, dizala. Displej: Razne fronte / paneli za strojeve i strojeve unutar maloprodaje.<br>***
            </div>

            <hr style="width:80%;"><h6 style="color: white;"> &copy; <?php echo date('Y'); ?> Plast Product
        </div>
        <script src="custom.js"></script>
    </body>
</html>