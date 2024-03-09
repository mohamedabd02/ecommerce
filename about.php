<?php
require("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Planet Shopify | Premier Online Shopping Destination for Men</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">About Us</h3>
          <hr />
          <img
          <img src="images/mtl.jpg"  class="img-fluid pb-1">

          <p class="mt-2">At Planet Shopify, we are driven by a passion for excellence and a commitment to providing our customers with the best possible shopping experience. Our curated selection of men's fashion and accessories reflects our dedication to quality, style, and innovation. We believe in creating value for our customers by offering products that enhance their lifestyle and express their individuality. Our team tirelessly works to source the finest materials and collaborate with leading designers to bring you collections that are both timeless and trendsetting.</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">LIVE SUPPORT</h1>
            <h3>Live Technical Support</h3>
          </span>
          <hr>
          <p>Understanding the importance of reliable support, Planet Shopify offers round-the-clock technical assistance. Our dedicated team of professionals is available 24 hours a day, 7 days a week, 365 days a year to ensure your shopping experience is seamless and enjoyable. Whether it's a question about our products, assistance with your order, or any other inquiry, we are here to provide prompt and comprehensive support. We believe in fostering strong relationships with our customers through exceptional service and support.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">
    <form class="col-md-12" action="https://formspree.io/mabd33427@gmail.com" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Us</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email Address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email" name="email">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {
    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }
  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
