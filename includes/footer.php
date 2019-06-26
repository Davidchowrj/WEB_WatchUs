<!-- Content Divider-->
<footer class="text-dark bg-light">
  <hr class="bg-light mb-1 mt-0 d-block mx-auto w-100">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-lg-4 col-xl-2 mx-auto">
        <h5 class="mt-3">Products</h5>
        <hr class="bg-dark mb-2 mt-0 d-inline-block mx-auto w-25">
        <ul class="list-unstyled">
          <li><a href="./smartWatch.php">Smart Watches</a></li>
          <li><a href="./DigitalWatch.php">Digital Watches</a></li>
          <li><a href="./analog.php">Analog Watches</a></li>
        </ul>
      </div>


      <div class="col-md-4 col-lg-4 col-xl-2 mx-auto">
        <h5 class="mt-3">Quick Access</h5>
        <hr class="bg-dark mb-2 mt-0 d-inline-block mx-auto w-25">
        <ul class="list-unstyled">
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="checkout.php">Checkout</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-lg-4 col-xl-3">
        <h5 class="mt-3">Contact</h5>
        <hr class="bg-dark mb-2 mt-0 d-inline-block mx-auto w-25">
        <ul class="list-unstyled">
          <li><i class="fa fa-home mr-2"></i> WatchUs Incorporated </li>
          <li><i class="fa fa-envelope mr-2"></i>  inquiries@WatchUs.com </li>
          <li><i class="fa fa-phone mr-2"></i> + (60)3-12345678</li>
        </ul>
      </div>
      <div class="col-12 copyright mt-3">

        <p class="float-left">&copy; 2018-2019 WatchUS, Inc. &middot; <a href="./index.php#About">About</a> &middot; <a href="#"></a></p>
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      </div>
    </div>
  </div>
</footer>



<!-- Bootstrap scripts 
    Placed at the end for faster loading-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- Script to change navbar colour on scroll -->
<script>
  $(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 450);
  });
</script>



</body>

</html>