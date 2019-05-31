<?php

$title = "WatchUS Incorporated";
$page = "home";
include "view/header.php";

?>

<div class="main">

    <!-- Highlight section of the homepage-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" keyboard="true" interval="4250">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="images/carousel1.jpg" class="img-fluid d-block" alt="Smart watches">
                </a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-xl-right">
                        <h2 class="display-3"> Smart watches</h2>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Shop Now</a></p>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="images/carousel2.jpg" class="img-fluid d-block w-100" alt="Digital watches">
                </a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-xl-right">
                        <h2 class="display-3"> Digital Watches</h2>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Shop Now</a></p>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="images/carousel3.jpg" class="img-fluid d-block " alt="Analog watches">
                </a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-xl-right">
                        <h2 class="display-3">Analog Watches</h2>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Shop Now</a></p>
                    </div>
                </div>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<div class="container about">
    <h1 class="text-center" id="about"> About Us</h1>
    <div class="row">
        <div class="col-lg-12">
            <p> uis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor
                mauris
                condimentum nibh
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <h3> Skrt </h3>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                ultricies
                vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent
                commodo cursus
                magna.</p>

        </div>
        <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <h3> yeet </h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor
                mauris
                condimentum nibh.</p>

        </div>
        <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <h3> Skrt Skrt </h3>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
                ligula porta
                felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                ut fermentum
                massa justo sit amet risus.</p>

        </div>
    </div>
</div>


<?php

include 'view/footer.php';

?>