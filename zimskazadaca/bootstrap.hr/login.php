<?php
$email = isset($_GET['email']) ? $_GET['email'] : (isset($_COOKIE['email']) ? $_COOKIE['email'] : '');


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
                <?php include_once 'navbar.php'; ?><br> 


                    

                    <figure class="figure">
                        <img src="slike/login.png" class="figure-img img-fluid rounded" alt="..." style="max-width:300px;">
                        
                        <form action="autorizacija.php" method="post">

                            <div class="mb-3 row" style="max-width:400px; margin: auto;">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?=$email?>" required>
                            </div> 

                            <div class="mb-3 row" style="max-width:400px; margin: auto;">
                                <label for="password" class="form-label">Your password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-outline-success">Login</button>
                        </form>

                            


<!-- 

                            <div class="mb-3 row" style="max-width:400px; margin: auto;">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>  
-->          
                            
                    </figure>
                    <a href="onama.php" class="link-success" target="_blank" style="font-size:15px">Forgot Password?</a><br><hr>




            </div>
        </div>    
    </div>



    <div class="container">
        <div class="container text-center">


        </div>    
    </div>

    <?php include_once 'footer.php'; ?>
    <?php include_once 'skripte.php'; ?>
</body>
</html>