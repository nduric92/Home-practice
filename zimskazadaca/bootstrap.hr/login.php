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
                        <form>
                            <div class="row mb-3"  style="max-width:400px; margin: auto;">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3"  style="max-width:400px; margin: auto;">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>                        
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
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