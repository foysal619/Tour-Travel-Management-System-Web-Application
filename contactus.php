<!DOCTYPE html> <!-- THIS NEED TO BE DECLARE FOR HTML -->
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- THIS IS TITLE SECTION -->
		<title>FM Travels LTD || Tour Agency</title>
		
		<!-- Company icon -->
		<link rel="icon" href="images/logo.png">
		<link rel="icon" href="images/favicon.ico" type="images/x-icon">
		
		<!-- Fontawsome sheet -->
		<link rel="stylesheet" href="css/all.css">
		
		<!-- style sheet -->
		<link rel="stylesheet" href="css/style.css">
		<style>
			[id*="-error"]{
				color:yellow;
				float:left;
				margin-top:-10px;
				
			}
		</style>
		<script rel="script" src="js/jquery-3.4.1.js"></script>
		<script rel="script" src="js/custom.js"></script>
	</head>
	<body>
			<!-- THIS IS HEADER TAG -->
		<header>
		<!-- Company Name and logo -->
		<div class="company">
		<img src="images/logo.png" alt="company name">
		<h2> FM Travels LTD </h2>
		</div>
		<!-- This is menu part -->
		<nav id="main-menu">
			<div id="mobile-icon">
			<i class="fas fa-bars"></i>
			</div>
			<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#service">Services</a></li>
			<li><a href="#review">Achivement</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="tourlist.php">Tour List</a></li>
			<li><a href="toursearch.php">Search & Importance</a></li>
			<li class="active"><a href="contactus.php">Contact Us</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="signup.php">SignUp</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="login.php">Login</a></li>
			</ul>
		</nav>
		</header>
		<main>
<!-- Contact us Part -->
		<section id="contact">
			<div class="container">
					<h6>Find Me</h6>
						<h1>Contact Us Now</h1>
					<form name="contactForm" onsubmit="if(confirm('Do you want this message?')){if(myValidation()==false){return fasle;}}else{event.preventDefault(); return false;}">
					<!-- Form Part 001 -->
					<div class="col-50">
						<div class="content">
						<input type="text" name="name" value="" placeholder="Enter Your Name" onfocus="myFocus(this)">
						<span id="name-error"></span>
						<input type="email" name="email" value="" placeholder="Enter Your Email" onfocus="myFocus(this)">
						<span id="email-error"></span>
						<input type="text" name="phone" value="" placeholder="Enter Your Phone" onfocus="myFocus(this)">
						<span id="phone-error"></span>
					</div>
					</div>
					
					<!-- Form Part 001 -->
					<div class="col-50">
					<div class="content">
						<textarea name="message" placeholder="Enter your message" onfocus="myFocus(this)"></textarea>
						<span id="message-error"></span>
					</div>
					</div>
					<div style="width:100%; clear:both;">
						<button class="btn" type="submit">Submit</button>
					</div>
					</form>
					
					<!-- Adress Part -->
					<div id="address">
						<div class="col-33"> 
						<div class="content">
							<i class="fas fa-map-marked-alt"></i>
							<p>Address<br>Dhanmondi, Dhaka</p>
						</div>
						</div>
						
						<div class="col-33"> 
						<div class="content">
							<i class="far fa-envelope"></i>
							<p>Email<br>foysalrahman67@gmail.com</p>
						</div>
						</div>
						
						<div class="col-33"> 
						<div class="content">
							<i class="fas fa-phone-alt"></i>
							<p>Phone<br>01837722931</p>
						</div>
						</div>
					</div>
			</div>		
		</section>
		

<?php include 'include/footer.php';?>