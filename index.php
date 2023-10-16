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

	<link rel="stylesheet" type="text/css" href="/poppins/poppins.css">

	<title>NEXXIT</title>
</head>

<body>
	<section id="navbar">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="nexlog.png" alt="error">
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
				href="#"><strong>Home</strong></a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="#hows">Be a rider</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="#vendor">Vendors</a>
			</li>	
			<li class="nav-item">
				<a class="nav-link"
				href="#aboutus">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="tel:+233203786321">Customer Service</a>
			</li>
			</ul>
		</div>
		</div>
	</nav>
	</section>

	<!-- banner -->
	<div class="banner" id="home">
		<div class="text">
		<h2><strong>WELCOME TO DES</strong></h2>
		<h4>Make long and short distance deliveries with ease.</h4>
		<h4>We are: <strong> Fast. Reliable. Safe. </strong></h4>
		<div class="action">
		<a href="tel:+233203786321" class="call-button">
		<i class="fas fa-phone-alt call-icon"></i><strong>Make a delivery</strong>	
        </a>
		</div>
	</div>
	</div>

	<!-- how-->
	<div class="how" id="hows">
	<div class="cards">
	<div class="col-md-4" id="service-col3">
			<img src="del2.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<div class="text">
			<h4 class="text-center"><strong>Be a Rider</strong></h4>
		<p> Join our diverse team of dedicated riders who are unwavering in their commitment to delivering fast and high-quality delivery service to our valued customers.</p>
		<a href="tel:+233203786321" class="call-button">
		<strong>Register</strong>
        </a>
		</div>
		</div>
		<div class="col-md-4" id="service-col3">
		<img src="del2.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<div class="text">
			<h4 class="text-center"><strong>Become our Business Paddie</strong></h4>
		<p> Join our diverse team of dedicated riders who are unwavering in their commitment to delivering fast and high-quality delivery service to our valued customers.</p>
		<a href="tel:+233203786321" class="call-button">
		<strong>Register</strong>
        </a>
		</div>
		</div>
		<div class="col-md-4" id="service-col3">
		<img src="ware.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<div class="text">
			<h4 class="text-center"><strong>Be a Warehouse</strong></h4>
		<p> Join our diverse team of dedicated riders who are unwavering in their commitment to delivering fast and high-quality delivery service to our valued customers.</p>
		<a href="tel:+233203786321" class="call-button">
		<strong>Register</strong>
        </a>
		</div>
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

<!-- Riders
<h2 class="text-center"><strong>BE A RIDER</strong></h2>
	<div class="about" id="rider">
	<div class="text">
		<p> 
		Join our diverse team of dedicated riders who are unwavering in their commitment to delivering fast and high-quality delivery service to our valued customers.
		</p>
		<a href="tel:+233203786321" class="call-button">
		<strong>Register</strong>
        </a>
		</div>
		<div class="back">
			<img src="del.png">
		</div>
	</div><hr>
-->

	<!--vendor-->
	<h2 class="text-center"><strong>Our Vendors</strong></h2>
	<div class="men" id="vendor">
	<div class="cards">
	<div class="col-md-5" class="col-md-05" id="service-col0">
			<img src="kfc.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KFC FAST FOODS</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" class="col-md-05" id="service-col0">
			<img src="s2.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>STREETWISE 5 - ORIGINAL</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" class="col-md-05" id="service-col0">
			<img src="m1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BURGER MEAL - ZINGER</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" class="col-md-05" id="service-col0">
			<img src="b3.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BONELESS BUCKET MEAL</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
		</div>
		</div>
		<div class="cards">
		<div class="col-md-5" class="col-md-05" id="service-col0">
			<img src="bg2.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>ZINGER TOWER BURGER</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" class="col-md-05" id="service-col0">
			<img src="o1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BOXMASTER ZINGER</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" class="new" id="service-col0">
			<img src="o6.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>24 ZINGER NUGGETS</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" class="new" id="service-col0">
			<img src="o26.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>2 PIECES CHICKEN - ORIGINAL</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
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