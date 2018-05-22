<?php

if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(!isset($_SESSION['username']))
{
    echo '<script>location="login.php";</script>';
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmToDesk BD</title>
	
    
	
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
	
  </head>
  <body>

	<?php
		include ('menu.php');
	?>
     
   <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://i.ytimg.com/vi/H-BUk99mwKE/maxresdefault.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="yellow">Good Food Everyday</font></h3>
              <p><font color="yellow">Directly From Your Local Farm</font></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://www.theindependentbd.com/assets/news_images/Fish-bonanza.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="green">Good health</font></h3>
              <p><font color="green">Sufficient quantities and various types of nutritional food</font></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://4.bp.blogspot.com/-vVwts_Gm3E4/Tw60ENzdj0I/AAAAAAAACYA/MVODoc5ASO4/s1600/IMG_7417.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="yellow">Food Like This</font></h3>
              <p><font color="yellow">Stay Healthy, Stay Happy</font></p>
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
    </header>
	
	 <div class="container">

      <h1 class="my-4">Welcome to Farm to Desk</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">What Makes Us Different</h4>
            <div class="card-body">
              <p class="card-text">We bring farmers produce items directly from farmers to your house</p>
            </div>
            <div class="card-footer">
              <a href="aboutus.php" class="btn btn-primary">Read Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Farmers and Us</h4>
            <div class="card-body">
              <p class="card-text"> Lorem ipsum dolor sit amet, conlis vdietd est non, dapibus sollicitudin justo. Donec porta odio nulla, id dapibus mauris porta in. Maecenas nec dolor nec dui aliquet ornare. </p>
            </div>
            <div class="card-footer">
              <a href="Farmers.php" class="btn btn-primary">Read Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Fresh Food</h4>
            <div class="card-body">
              <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet molestie felis vitae dapibus. Proin vitae ligula sed sapien imperdiet auctor a in</p>
            </div>
            <div class="card-footer">
              <a href="Fresh.php" class="btn btn-primary">Read Details</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Some Groceries For You</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="https://bizimages.withfloats.com/actual/5a682811cc0e340b741a2f07.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="rice.php">Basmati</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet molestie felis vitae dapibus. Proin vitae ligula sed sapien 
			  imperdiet auctor a in in enim. Sed massa lacus,</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="https://farm7.staticflickr.com/6210/6053072848_25b5411ca1_b.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="vegetable.php">Daal</a>
              </h4>
              <p class="card-text"> orem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet molestie felis vitae dapibus. Proin vitae ligula sed sapien imperdiet 
			  auctor a in enim. Sed massa lacus,</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="images\products\bagun.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="vegetable">Brinjal</a>
              </h4>
              <p class="card-text"> orem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet molestie felis .
			  vitae dapibus. Proin vitae ligula sed sapien imperdiet auctor a in enim. Sed massa lacus,</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="images\products\tomato.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="vegetable.php">Tomato</a>
              </h4>
              <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet molestie felis vitae dapibus. Proin vitae ligula sed sapien imperdiet auctor a in enim.
			  Sed massa lacus,</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="images\products\chicken.jpg"  alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="meat.php">Chiken</a>
              </h4>
              <p class="card-text">Suspendisse vitae mauris elit. Quisque arcu lectus, feugiat ac condimentum nec, tincidunt quis turpis. Curabitur sollicitudin commodo consectetur. 
			  In mattis libero erat, eget </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="images\products\rice1.jpg"  alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Balam Rice</a>
              </h4>
              <p class="card-text"> Suspendisse vitae mauris elit. Quisque arcu lectus, feugiat ac condimentum nec, tincidunt quis turpis. Curabitur sollicitudin commodo consectetur.
			  In mattis libero erat, eget</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>And Even Recipes...</h2>
          <p>Mauris ut nibh auctor:</p>
          <ul>
            <li>
              <strong>consectetur</strong>
            </li>
            <li>Ornare</li>
            <li>Laoreet</li>
            <li>Molestie</li>
            <li>Pharetra</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet molestie felis vitae dapibus. Proin vitae ligula sed sapien imperdiet auctor a in enim. Sed massa lacus, condimentum id est non, dapibus sollicitudin justo. Donec porta odio nulla, id
		  dapibus mauris porta in. Maecenas nec dolor nec dui aliquet ornare. Ut imperdiet nec arcu ultrices porttitor. 
		  Vivamus luctus massa non nunc viverra consequat. Mauris ut nibh auctor, fringilla odio sit amet, 
		  hendrerit eros. Fusce urna ligula, interdum at dui et, pharetra rhoncus nibh. </p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="images\biriyani.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Suspendisse vitae mauris elit. Quisque arcu lectus, feugiat ac condimentum nec, tincidunt quis turpis. Curabitur 
		  sollicitudin commodo consectetur. In mattis</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="products.php">Go Shopping!</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        

      </div>
    </div>
	<?php
		include ('footer.php');
	?>


	
	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
