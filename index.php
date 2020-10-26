<?php ?> 
<html>
<head>
<meta charset="utf-8">
<title>Shopy</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Shopy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Men</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Women</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kids</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Home &amp;Living</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Offer</a>
      </li>
    </ul>
	 <form class="form-inline ml-auto" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-light" type="submit">Search</button>
  </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginform.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>    
    </ul>
  </div>  
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    
  </ul>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="image/banner_2.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Deepavali offers</h3>
        <p>Ethenic Wears Startin from 499!!!!!!</p>
		<button class="btn btn-dark">Shop Now</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/banner_3.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>40% off for Shirts</h3>
        <button class="btn btn-dark">Shop Now</button>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<h4 class="text-center p-3">Popular Items</h4>
<div class="container">
<div class="card-deck mt-5 ">
  <div class="card">
    <img class="card-img-top" src="image/img_1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Kids Collection</h5>
      
      <button class="btn btn-outline-dark">Explore </button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/img_2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ladies Collection</h5>
      <button class="btn btn-outline-dark">Explore </button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/img_3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Gents Collection</h5>
       <button class="btn btn-outline-dark">Explore </button>
    </div>
  </div>
</div>
</div>
<div class="container-fluid bg-dark mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-12">
				<h6 class="text-light py-2">Online Shoping</h6>
				<ul class="list-unstyled text-light">
					<li>Men</li>
					<li>women</li>
					<li>Kids</li>
					<li>Home Living</li>
					<li>Offers</li>
					<li>Gift Cards</li>
				</ul>
				<p></p>
			</div>
			<div class="col-md-4 col-12">
				<h6 class="text-light py-2">Useful Links</h6>
				<ul class="list-unstyled text-light">
					<li>About Us</li>
					<li>FAQ</li>
					<li>Terms of Use</li>
					<li>Privacy Policy</li>
					<li>Blog</li>
					<li>Career</li>
				</ul>
			</div>
			<div class="col-md-4 col-12">
				<h6 class="text-light py-2">Get in Touch</h6>
				<i class="fa fa-facebook" style="font-size:24px;color:white"></i>
				<i class="fa fa-instagram" style="font-size:24px;color:white"></i>
				<i class="fa fa-twitter" style="font-size:24px;color:white"></i>
			</div>
		</div>
	</div>
</div>
</body>
</html>
