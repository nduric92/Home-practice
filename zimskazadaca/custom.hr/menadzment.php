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
                            <li><a href="product.php">Proizvodi</a></li>
                            <li><a href="proces.php">Proces Proizvodnje</a></li>
                            <li><a href="#" class="active">Menadzment</a></li>
                            <li><a href="onama.php">O nama</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                </div>
            </nav>  
                     
            <div class="large-6 medium-6 small-12 cell">
                <img src="slike/pp.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
            </div>

            <!-- Kartice menadzer -->
            <h2 style="text-align:center; color:White;">Menadzment</h2>
            <div class="menadz">
                <div class="men" style="background-color:#aaa;">
                <img src="slike/direktor.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
                    <h2>Generalni Direktor Jon Trondlag</h2>
                    <p>Bavi se upravljačkim i izvršnim poslovima u proizvodnim i uslužnim organizacijama i tvrtkama i odgovoran je za poslovanje, ispunjenje ciljeva organizacije, upravljanje ljudima, organizacijskim procesima i financijama.</p>
                </div>
                <div class="men" style="background-color:#bbb;">
                <img src="slike/prodaja.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
                    <h2>Voditelj prodaje Marko Maric</h2>
                    <p>Glavni postulat prodaje glasi – želite li ostvariti uspjeh u prodaji, potrebno je dovoljnom broju ljudi pomoći da dobiju ono što oni žele. Ako ste ikada nešto pokušali prodati, vjerojatno ste ubrzo shvatili da isti proizvod prodaju i mnogi drugi.</p>
                </div>
                <div class="men" style="background-color:#ccc;">
                <img src="slike/smjena1.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
                    <h2>Voditelj smjene Narko Nikolicic</h2>
                    <p>Vodi smjenu i radi raspored djelatnika na pojedinim strojevima sa naznakom na što bolju produktivnost. Vodi evidenciju radnog vremena djelatnika u svojoj smjeni. Priprema i vodi proizvodnju prema specifikaciji i u dogovoru s voditeljem proizvodnje, kontrolira rad strojeva i djelatnika.</p>
                </div>
            </div>            
            <?php include_once 'podnozje.php'; ?>
        </div>
        <script src="custom.js"></script>
    </body>
</html>