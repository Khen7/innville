<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>
	<link rel="stylesheet" href="index.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"/>
	<title>Nexxit-Value Meals</title>
</head>

<body>
	<section id="navbar">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
		<a class="navbar-brand" href="index.php">
			<img src="logo.png" alt="error">
			</a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse"
			id="navbarSupportedContent">
			<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link active"
				aria-current="page"
				href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="index.php">How It Works</a>
			</li>
			
			<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
		  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">VALUE DEALS</a></li>
            <li><a class="dropdown-item" href="streetwise.php">STREETWISE</a></li>
            <li><a class="dropdown-item" href="meals.php">MEALS</a></li>
			<li><a class="dropdown-item" href="buckets.php">BUCKETS</a></li>
			<li><a class="dropdown-item" href="burger.php">BURGERS</a></li>
			<li><a class="dropdown-item" href="Others.php">OTHERS</a></li>
          </ul>
        </li>
			<li class="nav-item">
				<a class="nav-link"
				href="index.php">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="index.php">Contact Us</a>
			</li>
			</ul>
		</div>
		</div>
	</nav>
	</section>

<!--Menu-->
<div class="men" id="mens">
<h2 class="text-center"><strong>Value Deals</strong></h2><hr>
<div class="cards">
	<div class="col-md-5" id="service-col1">
			<img src="v1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>STREETWISE BONELESS MEAL </strong></h6>
			<span>3pcs Tenders and Chips</span><br>
			<h6><strong> GHC49.00</strong></h6><br>
			<a href="deal.php" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="v2.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KFC WINGMAN</strong></h6>
			<span>6pcs Zinger Wings and Large Chips</span><br>
			<h6><strong> GHC91.00</strong></h6><br>
			<a href="burger.php" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="v3.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KFC BIG DEAL - HOT & CRISPY </strong></h6>
			<span>4 Pieces of Hot & Crispy Chicken, 8x Nuggets, 2x Dips, Large Chips and 2x 300ML Drinks.</span><br>
			<h6><strong> GHC186.00</strong></h6><br>
			<a href="deal.php" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="v4.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KFC BIG DEAL - ORIGINAL</strong></h6>
			<span>4 Pieces of Hot & Crispy Chicken, 8x Nuggets, Large Chips, 2x Dips and 2x 300ML Drinks.</span><br>
			<h6><strong> GHC186.00</strong></h6><br>
			<a href="box.php" class="btn">Order Now</a>
		</div>
		</div>
		<div class="cards">
	<div class="col-md-5" id="service-col1">
			<img src="v5.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>CHICKEN POPS MEAL </strong></h6>
			<span>Chicken Pops, Large Chips & 300ML Drink.</span><br>
			<h6><strong> GHC77.00</strong></h6><br>
			<a href="deal.php" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="v6.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>ZINGER NUGGET MEAL - MINI KRUSHER</strong></h6>
			<span>8 Nuggets, Chips and Mini Krusher</span><br>
			<h6><strong> GHC86.00</strong></h6><br>
			<a href="burger.php" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="v7.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>ZINGER NUGGET MEAL - DRINK </strong></h6>
			<span>8 Nuggets, Chips and 300ML Drink</span><br>
			<h6><strong>GHC86.00</strong></h6><br>
			<a href="deal.php" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="v8.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KFC CHICKEN RICE BOWL</strong></h6>
			<span>Inner Fillet with KFC Spicy Rice</span><br>
			<h6><strong>GHC41.00</strong></h6><br>
			<a href="box.php" class="btn">Order Now</a>
		</div>
		</div>
		<div class="cards">
		<div class="col-md-5" id="service-col2">
			<img src="v9.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KYEMP3</strong></h6>
			<span>8 Tenders, Large Chips and 2x Dips</span><br>
			<h6><strong>GHC126.00</strong></h6><br>
			<a href="burger.php" class="btn">Order Now</a>
		</div>
		</div>
		


	</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>