<?php
$email = isset($_GET['email']) ? $_GET['email'] : (isset($_COOKIE['email']) ? $_COOKIE['email'] : '');

?>
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
                            <li><a href="menadzment.php">Menadzment</a></li>
                            <li><a href="onama.php">O nama</a></li>
                            <li><a href="#" class="active">Login</a></li>
                        </ul>
                </div>
            </nav>   

            <div class="large-6 medium-6 small-12 cell">
                <img src="slike/pp.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
            </div>

             <!-- login form start -->
            <div class="body">
                <form action="autorizacija.php" method="post">
                    <!-- Headings for the form -->
                    <div class="headingsContainer">
                        <h3>Sign in</h3>
                        <p>Sign in with your username and password</p>
                    </div>

                    <!-- Main container for all inputs -->
                    <div class="mainContainer">
                        <!-- Username -->
                        <label for="email">Your Email</label>
                        <input type="text" placeholder="Enter Email" name="email" value="<?=$email?>" required>

                        <br><br>

                        <!-- Password -->
                        <label for="password">Your password</label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <!-- sub container for the checkbox and forgot password link -->
                        <div class="subcontainer">
                            <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                            </label>
                            <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                        </div>


                        <!-- Submit button -->
                        <button type="submit">Login</button>

                        <!-- Sign up link -->
                        <p class="register">Not a member?<a href="#">Register here!</a></p>
                    </div>
                </form><br>
                <?php include_once 'podnozje.php'; ?>
            </div>
        </div>
        <script src="custom.js"></script>
    </body>
</html>