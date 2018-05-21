<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
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


    <div class="row" >
      <div class="large-12">
        <h3 style="margin-top:100px;text-align:center;">My Farm To Desk Orders</h3>
        <hr>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="margin-top:20px;width:40%;margin-left:30%;">
		<table id="myTable" class="table table-active">
			<tr class="header">
				<th style="width:60%;">ID</th>
				<th style="width:60%;">Name</th>
				<th style="width:60%;">Units</th>
				<th style="width:40%;">Price</th>
				<th style="width:60%;">Total</th>
				<th style="width:60%;">Product Code</th>
				<th style="width:60%;">Date</th>
                <th style="width:60%;">Shipping</th>
			</tr>
  
        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
			  echo '<tr>';
              echo '<td>'.$obj->product_name.'</td>';
			  echo '<td>'.$obj->id.'</td>';
			  echo '<td>'.$obj->units.'</td>';
			  echo '<td>'.$obj->price.'</td>';
			  echo '<td>'.$currency.$obj->total.'</td>';
			  echo '<td>'.$obj->product_code.'</td>';
			  echo '<td>'.$obj->date.'</td>';
              echo '<td>'.$obj->shipping.'</td>';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
			  echo'</tr>';

            }
          }
        ?>
		</table>
      </div>
    </div>




    <div class="row" style="margin-left:60px;">
      <div class="small-12">

        

      </div>
    </div>

    <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Farm To Desk. All Rights Reserved.</p>
    </footer>

	<script>
		function myFunction() {
		  var input, filter, table, tr, td, i;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("myTable");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			  } else {
				tr[i].style.display = "none";
			  }
			}       
		  }
		}
		</script>

	
	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
