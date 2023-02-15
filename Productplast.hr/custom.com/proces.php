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
                            <li><a href="#" class="active">Proces Proizvodnje</a></li>
                            <li><a href="menadzment.php">Menadzment</a></li>
                            <li><a href="onama.php">O nama</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                </div>
            </nav>
                    
            <div class="large-6 medium-6 small-12 cell">
                <img src="slike/pp.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
            </div>

            <h2 style="text-align:center; color:White;">Proces proizvodnje</h2>
            <div class="proces">
                <div class="proces2">
                    <div class="procard">
                    <img src="slike/proces1.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
                    <h3>Card 1</h3>
                    <p>Some text</p>
                    <p>Some text</p>
                    </div>
                </div>

                <div class="proces2">
                    <div class="procard">
                    <img src="slike/proces2.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
                    <h3>Card 2</h3>
                    <p>Some text</p>
                    <p>Some text</p>
                    </div>
                </div>
                
                <div class="proces2">
                    <div class="procard">
                    <img src="slike/proces3.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
                    <h3>Card 3</h3>
                    <p>Some text</p>
                    <p>Some text</p>
                    </div>
                </div>
                
                <div class="proces2">
                    <div class="procard">
                    <img src="slike/proces4.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
                    <h3>Card 4</h3>
                    <p>Some text</p>
                    <p>Some text</p>
                    </div>
                </div>
            </div>

            <h2 style="text-align:center; color:White;">Brzi prikaz</h2>

            <div class="video">
            <img src="slike/procesgif.gif" class="img-fluid" style="width: 100%; max-height: 300px; object-fit:cover;"><br>
            <hr style="width:80%">***
            </div>
            


        </div>
        <script src="custom.js"></script>
    </body>
</html>