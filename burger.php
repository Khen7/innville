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
	<title>Nexxit Burgers</title>
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
            <li><a class="dropdown-item" href="value.php">VALUE DEALS</a></li>
            <li><a class="dropdown-item" href="streetwise.php">STREETWISE</a></li>
            <li><a class="dropdown-item" href="meals.php">MEALS</a></li>
			<li><a class="dropdown-item" href="buckets.php">BUCKETS</a></li>
			<li><a class="dropdown-item" href="#">BURGERS</a></li>
			<li><a class="dropdown-item" href="Others.php">OTHERS</a></li>
          </ul>
        </li>
			<li class="nav-item">
				<a class="nav-link"
				href="index.php">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="#contactus"><strong>Order on 0547815672</strong></a>
			</li>
			</ul>
		</div>
		</div>
	</nav>
	</section>

<!--Menu-->
<div class="men" id="mens">
<h2 class="text-center"><strong>Burgers</strong></h2><hr>
<div class="cards">
	<div class="col-md-5" id="service-col1">
			<img src="bg1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>VEG BURGER</strong></h6>
			<span>Vegetarian Burger</span><br>
			<h6><strong>GHC46.00</strong></h6><br>
			<a href="https://forms.gle/TbPDf2fu5JG6nQtA9" target="_blank" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="bg2.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>ZINGER TOWER BURGER</strong></h6>
			<span>1pc Buns, Zinger Dressing, 1pc Fillet,1pc Hash Brown and Cheese</span><br>
			<h6><strong>GHC80.00</strong></h6><br>
			<a href="https://forms.gle/TbPDf2fu5JG6nQtA9" target="_blank" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="bg3.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>COLONEL TOWER BURGER</strong></h6>
			<span>1pc Buns, Colonel Dressing, 1pc Fillet,1pc Hash Brown and Cheese</span><br>
			<h6><strong>GHC80.00</strong></h6><br>
			<a href="https://forms.gle/TbPDf2fu5JG6nQtA9" target="_blank" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="bg4.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BURGER - ZINGER</strong></h6>
			<span>1pc Bun, Zinger Dressing and 1pc Fillet</span><br>
			<h6><strong>GHC66.00</strong></h6><br>
			<a href="https://forms.gle/TbPDf2fu5JG6nQtA9" target="_blank" class="btn">Order Now</a>
		</div>
		</div>
		<div class="cards">
		<div class="col-md-5" id="service-col2">
			<img src="bg5.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BURGER - COLONEL</strong></h6>
			<span>1pc Bun, Colonel Dressing and 1pc Fillet</span><br>
			<h6><strong>GHC66.00</strong></h6><br>
			<a href="https://forms.gle/TbPDf2fu5JG6nQtA9" target="_blank" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="bg6.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>CRUNCH BURGER - ZINGER</strong></h6>
			<span>1pc Bun, Zinger Dressing, 1pc Mini Fillet</span><br>
			<h6><strong>GHC46.00</strong></h6><br>
			<a href="https://forms.gle/TbPDf2fu5JG6nQtA9" target="_blank" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="bg7.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>CRUNCH BURGER - COLONEL</strong></h6>
			<span>1pc Bun, Colonel Dressing, 1pc Mini Fillet</span><br>
			<h6><strong>GHC46.00</strong></h6><br>
			<a href="https://forms.gle/TbPDf2fu5JG6nQtA9" target="_blank" class="btn">Order Now</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="bg1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>VEG BURGER</strong></h6>
			<span>Vegetarian Burger</span><br>
			<h6><strong>GHC46.00</strong></h6><br>
			<a href="https://forms.gle/TbPDf2fu5JG6nQtA9" target="_blank" class="btn">Order Now</a>
		</div>
		</div>
	</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>