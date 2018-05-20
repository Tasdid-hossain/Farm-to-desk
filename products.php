<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
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
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
	
  </head>
  <body>

  <!-- NAVIGATION -->
  
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Farm To Desk Bangaladesh</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Markert
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="fish.php">Fish Markert</a>
                <a class="dropdown-item" href="rice.php">Rice Markert</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Recipe
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.html">Vegetable recipe</a>
                <a class="dropdown-item" href="blog-post.html">Pie recipe</a>
              </div>
            </li>
			    <a class="nav-link" href="orders.php">My Orders</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="cart.php">View Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
			<?php
			echo "<li class='nav-item dropdown'>";
			echo  "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownBlog' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
			if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "admin@farmtodesk.com"){
				echo "Admin";}
				else 
					echo "My Account";
				
			}
			else{
				
				echo "Login";
			}
			echo "</a>";
			?>
			<?php
			echo "<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownBlog'>";
			if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "admin@farmtodesk.com"){
					echo "<a class ='dropdown-item' href='account.php'>";
					echo "Update Quantity";
					echo "</a>";
					echo "<a class ='dropdown-item' href='upload.php'>";
					echo "Upload Product";
					echo "</a>";
					echo "<a class ='dropdown-item' href='logout.php'>";
					echo "Logout";
					echo "</a>";
				}
				else{
					echo "<a class ='dropdown-item' href='account.php'>";
					echo "Edit Profile";
					echo "</a>";
					echo "<a class ='dropdown-item' href='logout.php'>";
					echo "Logout";
					echo "</a>";
				}
			}
			else{
				echo "<a class ='dropdown-item' href='login.php'>";
				echo "Sign In";
				echo "</a>";
				echo "<a class ='dropdown-item' href='register.php'>";
				echo "Sign Up";
				echo "</a>";
			}
			
			echo "</div>";
			?>
			
            </li>
			
			</ul>
        </div>
      </div>
    </nav>
          
      
    <div class="row"  >
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-4 columns">';
              echo '<p><h3 style="margin-top:80px">'.$obj->product_name.'</h3></p>';
              echo '<img style="width:400px;height:250px;" src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';



              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>

        <div class="row" style="margin-left:400px; margin-top:100px">
          <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>

	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
