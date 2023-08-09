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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="index.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"/>
	<title>NEXXIT</title>
</head>

<body>
	<section id="navbar">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="NEX1.png" alt="error">
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
            Categories
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="value.php">VALUE DEALS</a></li>
            <li><a class="dropdown-item" href="streetwise.php">STREETWISE</a></li>
            <li><a class="dropdown-item" href="meals.php">MEALS</a></li>
			<li><a class="dropdown-item" href="buckets.php">BUCKETS</a></li>
			<li><a class="dropdown-item" href="burger.php">BURGERS</a></li>
			<li><a class="dropdown-item" href="Others.php">OTHERS</a></li>
          </ul>
        </li>
			<li class="nav-item">
				<a class="nav-link"
				href="#aboutus">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="tel:+233203786321"><strong>Customer Service</strong></a>
			</li>
			</ul>
		</div>
		</div>
	</nav>
	</section>

	<!-- banner -->
	<div class="banner" id="home">
		<div class="text">
		<h3>Get KFC fast foods in Winneba within 12 hours.</h3>
		<div class="action">
		<a aria-label="Chat on WhatsApp" class="whatsapp-button" href="https://wa.me/233203786321"> 
			<img class="chat" alt="Chat on WhatsApp" src="WhatsAppButtonGreenSmall.png" target="_blank" >
		</a>
		<a href="tel:+233203786321" class="call-button">
		<i class="fas fa-phone-alt call-icon"></i><strong>Order on Call</strong>	
        </a>
		</div>
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
			<p>CHOOSE ITEM</p>
		</div>
		<div class="col-md-4" id="service-col2">
			<img src="pay.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<p>FILL ORDER FORM & MAKE PAYMENT</p>
		</div>
		<div class="col-md-4" id="service-col3">
			<img src="pick.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<p>PICK UP ORDER</p>
		</div>
		</div><hr>
	</div>
	
<!--preOrder
<div class="preorder" id="preorders">
<h2><strong>Preorder Promotion</strong></h2>
    <p>Make a preorder now before the official launching of NEXXIT and get a GHC5.00 discount. <span><i>NOTE: This order will arrive a day after the end of this countdown.</i></span></p>
    <div id="countdown"></div>
</div>
-->
	<!--Menu-->
	<h2 class="text-center"><strong>CATEGORIES</strong></h2>
	<div class="men" id="mens">
	<div class="cards">
	<div class="col-md-5" id="service-col1">
			<img src="v8.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KFC CHICKEN RICE BOWL</strong></h6>
			<span>Inner Fillet with KFC Spicy Rice</span><br>
			<h6><strong>GHC41.00</strong></h6><br>
			<a href="value.php" class="btn">Value Deals</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="s2.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>STREETWISE 5 - ORIGINAL</strong></h6>
			<span>5 Pieces of Original Chicken and Large Chips.</span><br>
			<h6><strong>GHC116.00</strong></h6><br>
			<a href="streetwise.php" class="btn">StreetWise</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="m1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BURGER MEAL - ZINGER</strong></h6>
			<span>1pc Buns, Zinger Dressing, 1pc Fillet, Regular Chips and 300ML Drink</span><br>
			<h6><strong>GHC90.00</strong></h6><br>
			<a href="meals.php" class="btn">Meals</a>
		</div>
		<div class="col-md-5" id="service-col2">
			<img src="b3.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BONELESS BUCKET MEAL</strong></h6>
			<span>10 Tenders, 2 Large Chips and 3x Dips</span><br>
			<h6><strong>GHC171.00 CEDIS</strong></h6><br>
			<a href="buckets.php" class="btn">KFC Buckets</a>
		</div>
		</div>
		<div class="cards">
		<div class="col-md-5" id="service-col2">
			<img src="bg2.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>ZINGER TOWER BURGER</strong></h6>
			<span>1pc Buns, Zinger Dressing, 1pc Fillet,1pc Hash Brown and Cheese</span><br>
			<h6><strong>GHC80.00</strong></h6><br>
			<a href="burger.php" class="btn">Burgers</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="o1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BOXMASTER ZINGER</strong></h6>
			<span>1pc Tortilla, Zinger Dressing, 1pc Fillet, Cheese and 1pc Hash Brown</span><br>
			<h6><strong>GHC60.00</strong></h6><br>
			<a href="others.php" class="btn">Others</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="o6.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>24 ZINGER NUGGETS</strong></h6>
			<span>24 Nuggets and 4x Dips</span><br>
			<h6><strong>GHC121.00</strong></h6><br>
			<a href="others.php" class="btn">Others</a>
		</div>
		<div class="col-md-5" id="service-col1">
			<img src="o26.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>2 PIECES CHICKEN - ORIGINAL</strong></h6>
			<span>2 Piece of Original Chicken</span><br>
			<h6><strong>GHC55.00</strong></h6><br>
			<a href="others.php" class="btn">Others</a>
		</div>
		</div>
	</div><hr>

	<!-- aboutUs-->
	<h2 class="text-center"><strong>ABOUT US</strong></h2>
	<div class="about" id="aboutus">
	<div class="text">
		<p> 
		NEXXIT is the ultimate KFC ordering platform in Winneba, 
		offering quick and convenient delivery of the world-famous KFC menu to your doorstep within just 12 hours or fastter on request. 
		With three easy ordering methods; <a href="value.php">Order Online</a> | <a href="tel:+233203786321">Order on Call</a> | <a aria-label="Chat on WhatsApp" href="https://wa.me/233203786321" target="_blank">Order on WhatsApp </a>.
		NEXXIT caters exclusively to Winneba residents' taste buds and provides exceptional customer service. 
		With a focus on exclusivity and customer satisfaction, NEXXIT is the one-stop-site for all your KFC cravings, whether it's a family meal, 
		personal indulgence, or a get-together with friends. Join NEXXIT and experience the KFC experience at your doorstep in Winneba.
		</p>
		</div>
		<div class="back">
			<img src="about.png">
		</div>
	</div><hr>

	<!-- contactus-->
	<div class="contact" id="contactus">
	<h2 class="text-center"><strong>CONTACT US</strong></h2>
	<form>
  <fieldset disabled>
	<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Customer Service</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="0547815672">
    </div>
	<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="adongokhen1@gmail.com">
    </div>
	<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Distribution Center</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Effutu Library, Winneba">
    </div>
  </fieldset>
</form>
	</div>

	 <!-- Footer -->
	 <footer>
    <p>&copy; 2023 manycompanies.com | <a href="#">Oval Project</a> | <a href="terms.php">Terms of Use</a> | <a aria-label="Chat on WhatsApp" href="https://wa.me/233203786321" target="_blank">Contact Us </a>
  </footer>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="index.js"></script>
</body>
</html>