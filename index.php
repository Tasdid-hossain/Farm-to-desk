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
              <a class="nav-link" href="cart.php">View and Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
			<?php

					  if(isset($_SESSION['username'])){
						echo '<li><a href="account.php">My Account</a></li>';
						echo '<li><a href="logout.php">Log Out</a></li>';
					  }
					  else{
						echo '<li><a href="login.php">Log In</a></li>';
						echo '<li><a href="register.php">Register</a></li>';
					  }
				?>
        </div>
      </div>
    </nav>
         
      
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
              <h3><font color="yellow">ভাল খাবার প্রতিদিন</font></h3>
              <p><font color="yellow">সরাসরি খামার থেকে তাজা সবজি</font></p>
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
              <h3><font color="yellow">এমন খাবার</font></h3>
              <p><font color="yellow">ভাল এবং সুস্থ থাকতে তো সকলেই চায়</font></p>
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
              <a href="#" class="btn btn-primary">বিস্তারিত পড়ুন</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">কৃষি ও মানুষ</h4>
            <div class="card-body">
              <p class="card-text"> ঘটছে তার আধুনিকায়ন ও সহজে প্রয়োগের উপযোগিতা নির্ণয়। বাংলাদেশের কৃষকরা প্রাচীনকাল থেকেই কৃষি ও ‍কৃষির সকল উপখাতে প্রয়োগ করে আসছেন নানা প্রযুক্তি ও কৌশল। </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">বিস্তারিত পড়ুন</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">সতেজ খাবার</h4>
            <div class="card-body">
              <p class="card-text"> আমাদের সবাইকে প্রতিদিন কোন না কোন খাবারের জন্য দোকানে কিংবা বাজারে যেতে হয়। আর বর্তমানে ভেজাল খাবারের আড়ালে কোনটা তাজা কোনটা ভেজাল সেটা চেনা বড়ই মুশকিল হয়ে দাড়িয়েছে।</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">বিস্তারিত পড়ুন</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>আপনার জন্য কিছু বাজার</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="https://bizimages.withfloats.com/actual/5a682811cc0e340b741a2f07.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="product.html">বাসমতী চাল</a>
              </h4>
              <p class="card-text">বাসমতী চালে কোলেস্টেরল থাকে না। নিয়মিত আপনি যে পরিশোধিত চাল খান তার চেয়ে বাসমতী চাল ও বাদামী চাল স্বাস্থ্যকর। বাসমতী চালে কার্বোহাইড্রেট, সামান্য প্রোটিন,
			  খুবই সামান্য ফ্যাট, ভিটামিন এবং মিনারেল এবং অবশ্যই প্রচুর ফাইবার থাকে যা স্বাস্থ্যের জন্য উপকারী।</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="https://farm7.staticflickr.com/6210/6053072848_25b5411ca1_b.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">মুসুর ডাল</a>
              </h4>
              <p class="card-text"> সাধারণভাবে মসুর ডাল রান্না করে খাওয়ার পাশাপাশি এটা দিয়ে তৈরি করা হয় নানা রকমের পুষ্টিকর ও মুখরোচক খাবার।
			  যেমন – ডালের চচ্চড়ি, ডালনা, নিরামিষ, পিঁয়াজু, ডালপুরি, ডালের স্যুপ, আম ডাল, পুঁই ডাল ইত্যাদি।</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="img\sx.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">বেগুন</a>
              </h4>
              <p class="card-text"> সারা বছর এই সবজি পাওয়া যায়। এমনকি এটি বাড়ির যে কোনো জায়গায় লাগিয়ে ও এর ফল পাওয়া যায়।  পুষ্টিগুণ : প্রতি ১০০গ্রাম বেগুনে আছে প্রোটিন ১.৪গ্রাম, ক্যালসিয়াম ১৮
			  মিগ্রা, কার্বোহাইড্রেট ৪গ্রাম, ফসফরাস ৪৭ মিগ্রা, রিবোফ্লাবিন ০.১১মিগ্রা, লোহা ০.৯মিগ্রা, ফ্যাট ০.৩ গ্রাম, পটাশিয়াম ২০০মিগ্রা</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="img\lau.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">লাউ</a>
              </h4>
              <p class="card-text">আমাদের সবজির মধ্যে লাউ অন্যতম। বর্তমানে বাজারে লাউয়ের দাম বেশ একটু চড়া। লাউয়ের উৎপাদন বাড়াতে পারলে কৃষক লাভবান হবে পাশাপাশি ক্রেতারাও কম দাম লাউ কিনতে পারবে। লাউ গাছে প্রচুর ফুল ধরে, কিন্তু লাউ ধরে খুব কম।</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="img\chicken.png"  alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">দেশি মুরগি</a>
              </h4>
              <p class="card-text">দেশী মুরগি উৎপাদনে উন্নত কৌশল. বাংলাদেশের গ্রাম এলাকায় প্রায় প্রতিটি পরিবার দেশী মুরগি পালন করে থাকে। এদের উৎপাদন ক্ষমতা বিদেশী মুরগির চেয়ে কম। উৎপাদন ব্যয়ও অতি নগণ্য। 
			  এটি অধিক রোগ প্রতিরোধ ক্ষমতা সম্পন্ন। এদের মাংস ও ডিমের মূল্য বিদেশী মুরগীর তুলনায় দ্বিগুণ, এর চাহিদাও খুবই বেশী। </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="img\saag.jpg"  alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">কলমি শাক</a>
              </h4>
              <p class="card-text"> দামে খুব সস্তা অথচ পুষ্টিগুণে অনন্য এমন খাবারের নামের তালিকায় উঠে আসবে কলমি শাকের নাম। কলমি শাক মূলত ভাজি অথবা ঝোল রান্না ভাতের সঙ্গে খাওয়া হয়। 
			  এছাড়া এই শাক দিয়ে পাকোড়া, বড়া ইত্যাদি তৈরী করে খাওয়া যায়।</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>এমন কি রেসিপি </h2>
          <p>নিচের কিছু রেসিপি পাবেন আমাদের ওয়েবসাইটে:</p>
          <ul>
            <li>
              <strong>ট্যাংরা মাছের রেসিপি</strong>
            </li>
            <li>লাউ এর রেসিপি</li>
            <li>চিংড়ি রেসিপি</li>
            <li>কালা ভুনা রেসিপি</li>
            <li>রোস্ট রেসিপি</li>
          </ul>
          <p>ট্যাংরা মাছের নাম শুনলে যেকোনো ভোজনরসিকের জিভে জল এসে যায়। সুস্বাদু মাছটি রান্না করা যায় নানা উপায়ে।
		  পেঁয়াজ-কুচি, কাঁচা মরিচ দিয়ে ট্যাংরা মাছ চচ্চড়ির জুড়ি নেই। ট্যাংরা মাছের ঝোলের স্বাদ অনন্য। দেশের দক্ষিণাঞ্চলের নদ-নদীতে পাওয়া যায় নোনা ট্যাংরা। 
		  তবে মিঠা পানির দেশি ট্যাংরা হলে স্বাদ আরও বেশি। </p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="img\tengra.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>সপ্তাহের ব্যবধানে মাংস, সবজি এবং চালের দাম কিছুটা বেড়েছে। গত সপ্তাহের চেয়ে ২০ থেকে ৩০ টাকা বেড়েছে মুরগির মাংসের দাম। অন্যদিকে ৫ থেকে ১৫ টাকা দর বেড়েছে বিভিন্ন সবজির।
		  আজ পেঁয়াজের দাম বাড়ার আশঙ্কা</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">বাজারে যান</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
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
