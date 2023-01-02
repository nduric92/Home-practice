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
                    <?php include_once 'navbar.php'; ?><br> 

                    <br><h2>Ovo su neki od nasih najprodavanjijh proizvoda</h2><br>



                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="slike/vme1.jpg"  alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color:red">VME1</h5>
                                <p style="color:red">Proizvod koji se postavlja u Volvo - truck</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img src="slike/vme2.jpg"  alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color:red">VME2</h5>
                                <p style="color:red">Proizvod koji se postavlja u Volvo - truck</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img src="slike/vme4.jpg"  alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color:red">VME3</h5>
                                <p style="color:red">Proizvod koji se postavlja u Volvo - truck</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img src="slike/vme3.jpg" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color:red">VME4</h5>
                                <p style="color:red">Proizvod koji se postavlja u Volvo - truck</p>
                            </div>
                            </div>
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    
                    
                    
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