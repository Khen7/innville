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
	<title>preOrder</title>
</head>

<body>
	<section id="navbar">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">
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
				href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="#hows">How It Works</a>
			</li>
			
			<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="just4me.php">Just for me</a></li>
            <li><a class="dropdown-item" href="share.php">For sharing</a></li>
            <li><a class="dropdown-item" href="deal.php">Deals</a></li>
			<li><a class="dropdown-item" href="box.php">Box meal</a></li>
			<li><a class="dropdown-item" href="burger.php">Burgers</a></li>
          </ul>
        </li>
			<li class="nav-item">
				<a class="nav-link"
				href="#aboutus">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="#contactus">Contact Us</a>
			</li>
			</ul>
		</div>
		</div>
	</nav>
	</section>

	<!-- banner -->
	<div class="banner" id="home">
		<div class="text">
		<h3>Get KFC fast foods in Winneba within 24 hours at very affordable prices.</h3>
		<a href="just4me.php" class="btn">Check Menu</a>
		</div>
<div class="back">
	<img src="back8.jpeg" alt="error">
</div>
	</div>

	<!-- how-->
	<div class="how" id="hows">
	<h2 class="text-center">HOW IT WORKS</h2>
	<div class="cards">
	<div class="col-md-4" id="service-col1">
			<img src="order.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<p>1. MAKE ORDER</p>
		</div>
		<div class="col-md-4" id="service-col2">
			<img src="pay.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<p>2. MAKE PAYMENT</p>
		</div>
		<div class="col-md-4" id="service-col3">
			<img src="pick.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<p>3. PICK UP ORDER</p>
		</div>
		</div><hr>
	</div>
	
<!--preOrder-->
<div class="preorder" id="preorders">
<h2><strong>Preorder Countdown</strong></h2>
    <p>Make a preorder before the count down ends and get a 10% discount. <span><i>NOTE: This order will arrive at the end of this countdown.</i></span></p>
    <div id="countdown"></div>
</div>

	<!--Menu-->
	<div class="men" id="mens">
	<div class="cards">
	<div class="col-md-5" id="service-col1">
			<img src="d3.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>Boneless Value Meal - 33 CEDIS</strong></h5>
			<p>2 Tenders, Small Pouch Chips 1x Dip</p>
			<a href="deal.php" class="btn">Check Menu</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="b2.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>Tower Burger - 47 CEDIS</strong></h5>
			<p>Zinger or Colonel Tower Burger</p>
			<a href="burger.php" class="btn">Check Menu</a>
		</div>
		</div>
		<div class="cards">
		<div class="col-md-5" id="service-col2">
			<img src="d2.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>KFC Big Deal - 129.00 CEDIS</strong></h5>
			<p>4 Pieces of Chicken, 4 Crispy Strips, Large Chips and 2x 300ML Drink</p>
			<a href="deal.php" class="btn">Check Menu</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="box1.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>Fully Loaded Meal - 85 CEDIS</strong></h5>
			<p>1 Zinger/Colonel Burger, 1 Piece of Chicken, Regular Chips, Coleslaw and 300ML Drink</p>
			<a href="box.php" class="btn">Check Menu</a>
		</div>
		</div>
		<div class="cards">
		<div class="col-md-5" id="service-col2">
			<img src="j19.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>Colonel Rice - 25 CEDIS</strong></h5>
			<p>350 Gram</p>
			<a href="just4me.php" class="btn">Check Menu</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="s7.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>18 piece Bucket - 280 CEDIS</strong></h5>
			<p>18 pieces of Original Chicken or Hot & Crispy</p>
			<a href="share.php" class="btn">Check Menu</a>
		</div>
		</div>
		<div class="cards">
		<div class="col-md-5" id="service-col2">
			<img src="j27.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>Twister - 39 CEDIS</strong></h5>
			<p>Colonel/Zinger Sauces</p>
			<a href="just4me.php" class="btn">Check Menu</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="b6.jpg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h5><strong>Veg Burger - 25 CEDIS</strong></h5>
			<p>Vegetable Burger</p>
			<a href="burger.php" class="btn">Check Menu</a>
		</div>
		</div>
	</div><hr>

	<!-- aboutUs-->
	<h2 class="text-center">ABOUT US</h2>
	<div class="about" id="aboutus">
	<div class="text">
		<p> Welcome to our fast food ordering website! We are students from University of Education - Winneba who are 
			passionate about bringing good food and convenience to our society. Our platform allows you to browse a variety of 
			meals and place orders online. Once your order is confirmed, you wil receive a notification	within 24 hours when your order is ready for pick up, 
			so you can enjoy your favorite meals without the hassle of traveling long distances or waiting in line to get a bite of your favourite fast food. 
			Thank you for choosing our website for your food needs!
		</p>
		</div>
		<div class="back">
			<img src="about.png">
		</div>
	</div><hr>

	<!-- contactus-->
	<h2 class="text-center">CONTACT US</h2>
	<div class="contact" id="contactus">
	<form>
  <fieldset disabled>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Location</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Winneba">
    </div>
	<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Phone Number</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="0547815672">
    </div>
	<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="adongokhen1@gmail.com">
    </div>
  </fieldset>
  <a href="#" class="btn">Send Us a message</a>
</form>
	</div>

	 <!-- Footer -->
	 <footer>
    <p>&copy; 2023 preOrder.com | <a href="#">Oval Project</a> | <a href="terms.php">Terms of Use</a> | <a href="https://wa.me/0203786321?text=Welcome to our support service. Please tell us hou we can help you.">Customer Service</a></p>
  </footer>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="index.js"></script>
</body>
</html>