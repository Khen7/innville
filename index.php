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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="index.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"/>

	<link rel="stylesheet" type="text/css" href="/poppins/poppins.css">

	<title>HorseHeels</title>
</head>

<body>
	<section id="navbar">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="heel1.png" alt="error">
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
				href="#index"><strong>Home</strong></a>
			</li>
			<li class="nav-item">
				<a class="nav-link"
				href="#hows">Be a Partner</a>
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
		<h3><strong>The biggest delivery network out there.</strong></h3>
		<h4><strong>Deliver Whatever | Wherever | Whenever. </strong></h4>
		<div class="action">
		<a href="tel:+233203786321" class="call-button">
		<strong>Make a delivery</strong>	
        </a>
		</div>
	</div>
	<div class="banner-image">
		<img src="earn.jpg" alt="error">
	</div>
	</div>

	<!-- how-->
	<div class="how" id="hows">
	<div class="cards">
	<div class="col-md-4" id="service-col3">
			<img src="del2.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<div class="text">
			<h4 class="text-center"><strong>Be a Rider</strong></h4>
		<span> Work at your own convenience and make extra money as a delivery rider.</span><br>
		<a href="https://forms.gle/3XyU8ax8prJRNwPw9" target="_blank" class="how-link"><strong>Start earning</strong> <i class="fa-solid fa-arrow-right"></i> </a> 	
		</div>
		</div>
		<div class="col-md-4" id="service-col3">
		<img src="store.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<div class="text">
			<h4 class="text-center"><strong>Be a Vendor</strong></h4>
		<span> Reach more customers and grow your business with us.</span><br>
		<a href="packages.php" class="how-link"><strong>Sign up your store</strong> <i class="fa-solid fa-arrow-right"></i> </a> 
		</div>
		</div>
		<div class="col-md-4" id="service-col3">
		<img src="ware.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<div class="text">
			<h4 class="text-center"><strong>Be a Distributor</strong></h4>
		<span> register as a warehousse and get commissions per pickup.</span><br>
		<a href="https://forms.gle/ir83m7vdXVsK5DGx7" target="_blank" class="how-link"><strong>Register</strong> <i class="fa-solid fa-arrow-right"></i> </a> 
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
	<h2 class="text-v"><strong>Our Vendors</strong></h2>
	<div class="vmen" id="vendor">
	<div class="cards">
	<div class="col-md-5" id="service-col0">
			<img src="kfc.png" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KFC FAST FOODS</strong></h6>
			<a href="kfchome.php" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" id="service-col0">
			<img src="s2.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>KINGS AND QUEENS</strong></h6>
			<a href="kfchome.php" style="pointer-events: none" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" id="service-col0">
			<img src="m1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BIGGIE'S</strong></h6>
			<a href="kfchome.php" style="pointer-events: none" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" id="service-col0">
			<img src="b3.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>CAMPUS CHEF</strong></h6>
			<a href="kfchome.php" style="pointer-events: none" class="btn">View Menu</a>
		</div>
		</div>
		<div class="cards">
		<div class="col-md-5" id="service-col0">
			<img src="bg2.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>TEMPEST LOUNGE</strong></h6>
			<a href="kfchome.php" style="pointer-events: none" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" id="service-col0">
			<img src="o1.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>ORBIT FOOD</strong></h6>
			<a href="kfchome.php" style="pointer-events: none" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" id="service-col0">
			<img src="o6.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>PRAISE SERVISES</strong></h6>
			<a href="kfchome.php" style="pointer-events: none" class="btn">View Menu</a>
		</div>
		<div class="col-md-5" id="service-col0">
			<img src="o26.jpeg" class="img-fluid rounded mx-auto d-block" alt="..."/>
			<h6><strong>BUSH CANTEEN</strong></h6>
			<a href="kfchome.php" style="pointer-events: none" class="btn">View Menu</a>
		</div>
		</div>
	</div><hr>

	<!-- aboutUs-->
	<div class="about" id="aboutus1">
		<div class="content">
		<div class="top">
        <h2><strong>Experience Seamless Delivery Services Across Ghana.</strong></h2>
		<h6><strong>Have your parcel delivered anywhere in Ghana.</strong></h6>
	    </div>
	<div class="text">
		<p> 
		From the north to the south, we've got Ghana covered. Wherever you are, we'll be there with your parcels.
		</p>
		<a href="tel:+233203786321" class="link"><strong>Make parcel delivery</strong> <i class="fa-solid fa-arrow-right"></i> </a> 
		</div>
		</div>
		<div class="back">
			<img src="pascel.jpg">
		</div>
	</div>
	
	<div class="about" id="aboutus2">
	<div class="back">
			<img src="food.jpg">
		</div>	
		<div class="content">
		<div class="top">
        <h2><strong>Order From Your Favourite Restaurant In Town.</strong></h2>
		<h6><strong>We will deliver it to you.</strong></h6>
		</div>
	<div class="text">
		<p> 
		We are working closely with your favourite food joints to get your favorite dishes delivered right to your doorstep.
		</p>
		<a href="tel:+233203786321" class="link"><strong>Order now</strong><i class="fa-solid fa-arrow-right"></i> </a>
		</div>
		</div>
	</div>
	
	<div class="about" id="aboutus3">
		<div class="content">
		<div class="top">
        <h2><strong>Grow Your Business With Us.</strong></h2>
		</div>
	<div class="text">
		<p> 
		Both big and small businesses partner with HorseHeel to expand their customer base, boost order numbers, and increase sales.
		</p>
		<a href="packages.php" target="_blank" class="link"> <strong>Sign up your store</strong> <i class="fa-solid fa-arrow-right"></i> </a>
		</div>
		</div>
		<div class="back">
			<img src="grow.jpg">
		</div>
	</div>

	<div class="about" id="aboutus4">
	<div class="back">
			<img src="earn.jpg">
		</div>	
		<div class="content">
		<div class="top">
        <h2><strong>Earn Extra Cash On The Side.</strong></h2>
		</div>
	<div class="text">
		<p> 
		Join our delivery network, set your flexible schedule, and begin earning money wherever and whenever you choose.
		</p>
		<a href="https://forms.gle/3XyU8ax8prJRNwPw9" target="_blank" class="link"><strong>Start earning</strong> <i class="fa-solid fa-arrow-right"></i> </a>
		</div>
		</div>
	</div>
	<hr>

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
    <p>&copy; 2023 HorseHeel | <a href="innville.com">Oval Project</a> | <a href="terms.php">Terms of Use</a> | <a aria-label="Chat on WhatsApp" href="https://wa.me/233203786321" target="_blank">Contact Us </a>
  </footer>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/c048758eef.js" crossorigin="anonymous"></script>
	<script src="index.js"></script>
</body>
</html>