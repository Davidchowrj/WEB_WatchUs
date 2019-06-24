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
                        <p><a class="btn btn-lg btn-primary" href="./smartWatch.php" role="button">Shop Now</a></p>
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
                        <p><a class="btn btn-lg btn-primary" href="./DigitalWatch.php" role="button">Shop Now</a></p>
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
                        <p><a class="btn btn-lg btn-primary" href="./analog.php" role="button">Shop Now</a></p>
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



<div class="container about mb-4" id="about">
    <h1 class="text-center"> About Us</h1>
    <div class="row">
        <div class="col-lg-12">
<<<<<<< HEAD
            <p class="lead text-center"> A passionate start up set on delivering the world's best curation of 
                selected watches ranging from three different types right to your doorstep with the 
                utmost best of both customer support and after sales service. 
=======
            <p class="lead text-center"> A passionate start up set on delivering the world's best curation of
                selected watches ranging from three different types right to your doorstep with the
                utmost best of both customer support and after sales service.
>>>>>>> meng
                <br>Based in Malaysia and providing world wide delivery 24/7.
            </p>
        </div>
    </div>

    <div class="row my-5">
<<<<<<< HEAD
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
      
=======
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

<div class="container about py-3 mb-5">
    <h1 class="text-center"> Whats Happening</h1>
    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <a href="https://www.gshock.com/collections/bodega">
                <img class="rounded-circle" src="https://casiocdn.com/gshock-v2/resource/images/backgrounds/bodega-1-hd.jpg" alt="Generic placeholder image" width="140" height="140">
            </a>
            <h2>G-Shock X Bodega </h2>
            <h3 class="mb-2"> Collaboration Launch Party </h3>
            <p class="text-left">In celebration of G-Shock's and Bodega's collaborative release, Bodega hosted a small get together in boston, bringing Bodega stocked with
                alphabet soup and some of their favourite DJ's.</p>

        </div>
        <div class="col-lg-4">
            <a href="https://www.bloomberg.com/news/articles/2019-06-20/best-dive-watches">
                <img class="rounded-circle" src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iL0RBApSchC4/v1/800x-1.jpg" alt="Generic placeholder image" width="140" height="140">
            </a>
            <h2>Deep Dive</h2>
            <h3 class="mb-2 display-block"> Diving Deep and Saving the Ocean </h3>
            <p class="text-left mx-2">Wristwatches have been worn for diving, sailing, and other maritime activities, at least since the first waterproof watch case, the Rolex Oyster,
                made its debut in 1926.</p>

        </div>
        <div class="col-lg-4">
            <a href="https://www.augustman.com/sg/style/watches/watches-worn-by-influential-men-2019/">
                <img class="rounded-circle" src="https://d1otfi4uhdq3fm.cloudfront.net/wp-content/uploads/2019/06/21151324/Virgil-Ablohs-Custom.jpg" alt="Generic placeholder image" width="140" height="140">
            </a>
            <h2> Influential Men & their Watches</h2>
            <p class="text-left mx-2">A gentleman's choice of timepiece says a lot about him. It is an extension of him, as it epitomises his personality,
                values, and style. So it comes as no surprise that many of the world's most influential men
            </p>
>>>>>>> meng

        </div>
    </div>
</div>


<?php

include 'includes/footer.php';

?>