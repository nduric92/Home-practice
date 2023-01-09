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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#" class="active">Proizvodi</a></li>
                            <li><a href="proces.php">Proces Proizvodnje</a></li>
                            <li><a href="menadzment.php">Menadzment</a></li>
                            <li><a href="onama.php">O nama</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                </div>
            </nav>
                    
            <div class="large-6 medium-6 small-12 cell">
                <img src="slike/pp.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
            </div>

                <!-- PROIZVODI POCETAK-->

                <h3 style="font-size: 20px; color: white;text-align: center;">Neki od proizvoda Product Plast</h3>
                <div class="row">
                    <div class="column" style="background-size: 100% 100%; background-image: url(slike/vme1.jpg);">
                        <h2>VME 128</h2>
                    </div>
                    <div class="column" style="background-size: 100% 100%; background-image: url(slike/vme2.jpg);">
                        <h2>VME 242</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="column" style="background-size: 100% 100%; background-image: url(slike/vme3.jpg);">
                        <h2>VME 333</h2>
                    </div>
                    <div class="column" style="background-size: 100% 100%; background-image: url(slike/vme4.jpg);">
                        <h2>VME 136</h2>
                    </div>
                </div>

                <div class="text1">
                Industrija rashladnih sredstava: Rashladna oprema za komercijalne kuhinje, rashladne jedinice i druge srodne industrije.<hr style="width:80%">
                Pomoćni proizvodi: Razna pomagala za osobe s invaliditetom, kao što su invalidska kolica, skuteri, dizala.<br>***
                </div>
                
        <?php include_once 'podnozje.php'; ?>
        </div>
        <script src="custom.js"></script>        
    </body>
</html>