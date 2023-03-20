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
	<title>preOrder-Box Meals</title>
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
            <li><a class="dropdown-item" href="just4me.php">Just for me</a></li>
            <li><a class="dropdown-item" href="share.php">For sharing</a></li>
            <li><a class="dropdown-item" href="deal.php">Deals</a></li>
			<li><a class="dropdown-item" href="#">Box meal</a></li>
			<li><a class="dropdown-item" href="burger.php">Burgers</a></li>
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
<h2 class="text-center">Box Meal</h2>
	<div class="cards">
	<div class="col-md-5" id="service-col1">
			<img src="box1.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>Fully Loaded Meal - 94.00 CEDIS</strong></h5>
			<p>1 Zinger/Colonel Burger, 1 Piece of Chicken, Regular Chips, Coleslaw and 300ML Drink</p>
			<a href="#" class="btn">Order Now!</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="box2.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>Wicked Zinger Meal - 108.00 CEDIS</strong></h5>
			<p>1 Zinger Burger, 4pcs Lime Chilli Wings, Regular Chips, Coleslaw and 300ML Drink</p>
			<a href="#" class="btn">Order Now!</a>
		</div>
		</div>
	</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>