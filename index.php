<?php

$title = "WatchUs Incorporated";
$page = "index";
include "includes/header.php";
require_once "signup/createdb.php";

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



<div class="container about pb-5" id="about">
    <h1 class="text-center"> About Us</h1>
    <div class="row">
        <div class="col-lg-12">
            <p class="lead text-center"> A passionate start up set on delivering the world's best curation of 
                selected watches ranging from three different types right to your doorstep with the 
                utmost best of both customer support and after sales service. 
                <br>Based in Malaysia and providing world wide delivery 24/7.
            </p>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-lg-4">
            <img class="rounded-circle" src="https://www.tenforums.com/geek/gars/images/2/types/thumb__ser.png" alt="Generic placeholder image" width="140" height="140">
            <h2>David Chow</h2>
            <h3> CTO </h3>
       

        </div>
        <div class="col-lg-4">
            <img class="rounded-circle" src="https://www.tenforums.com/geek/gars/images/2/types/thumb__ser.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Wong Meng Leong</h2>
            <h3> CEO </h3>
        
        </div>
        <div class="col-lg-4">
            <img class="rounded-circle" src="https://www.tenforums.com/geek/gars/images/2/types/thumb__ser.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Lee Chee Shuen</h2>
            <h3> CFO </h3>
      

        </div>
    </div>
</div>


<?php

include 'includes/footer.php';

?>