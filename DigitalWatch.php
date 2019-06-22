<?php

$title = "Digital Watches | WatchUS";
$page = "analog";
include "includes/header.php";

?>

<!-- Video display section -->
<section>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="./images/gshock.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-2">Digital Watches</h1>
            </div>
        </div>
    </div>
</section>




<!-- Product Layout -->
<div class="main">
    <div class="container product">
        <h1 class="text-left mt-5 mb-0 "> Digital Watches</h1>
        <hr class="bg-primary mb-2 mt-0 d-inline-block mx-auto w-25">
        <div class="row">
            <div class="col-lg-12 mb-5">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="./images/Digi1.png" alt="img">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Watch</h4>
                        <p class="card-text">Bla Bla short description</p>
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="./images/Digi2.png" alt="img">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Watch</h4>
                        <p class="card-text">Bla Bla short description</p>
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="./images/Digi3.png" alt="img">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Watch</h4>
                        <p class="card-text">Bla Bla short description</p>
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="./images/Digi4.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Watch</h4>
                        <p class="card-text">Bla Bla short description</p>
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="./images/Digi5.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Watch</h4>
                        <p class="card-text">Bla Bla short description</p>
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="./images/Digi6.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Watch</h4>
                        <p class="card-text">Bla Bla short description</p>
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>
        
        <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="./images/digi7.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Watch</h4>
                        <p class="card-text">Bla Bla short description</p>
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>
        
        <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="./images/Digi8.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">Watch</h4>
                        <p class="card-text">Bla Bla short description</p>
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>
         </div>
       </div>
    
    
    <!-- Image popup section -->

    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="" class="imagepreview" style="width: 100%;">
                </div>
                <div class="modal-footer border-0 mt-4">
                    <button class="btn btn-secondary btn-rounded btn-md ml-4 text-center" href="" type="button">Add to Cart</button>
                    <button class="btn btn-outline-danger btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>




<?php

include 'includes/footer.php';

?>


<!-- Script for product image popup -->
<script type="text/javascript">
    $(function() {
        $('.pop').on('click', function() {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');
        });
    });
</script>