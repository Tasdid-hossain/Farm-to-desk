<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

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
				<a class="dropdown-item" href="vegetable.php">Vegetable Markert</a>
				<a class="dropdown-item" href="meat.php">Meat Markert</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Recipe
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="v_recipe.php">Vegetable recipe</a>
                <a class="dropdown-item" href="p_recipe.php">Pie recipe</a>
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
    <!-- Page Content -->
    <div class="container" style="margin-top:60px;">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">About Us
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About Us</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/aboutus.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2>What Makes Us Different</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </div>
      </div>
    

    </div>

    <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Farm To Desk. All Rights Reserved.</p>
    </footer>


	
	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
