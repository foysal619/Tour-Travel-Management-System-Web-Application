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
			input{
				width: 45%;
				height: 30px;
				border: 2px;
				border-radius:20px;
				padding: 8px 15px 8px 15px;
				margin: 10px 0px 15px 0px;
				box-shadow: 1px 1px 2px 1px white;
			}
			input[type="text"]
				{
					background: transparent;
					border: none;
					text-align:center;
				}
			input::placeholder {
			  color: black;
			  text-align:center;
			  font-size: 1.2rem;
			  font-family:oswald;
			  font-weight: 500;
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
			<li><a href="index.php">Home</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#service">Services</a></li>
			<li><a href="#review">Achivement</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="tourlist.php">Tour List</a></li>
			<li class="active"><a href="toursearch.php">Search & Importance</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="signup.php">SignUp</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="login.php">Login</a></li>
			</ul>
		</nav>
		</header>
<main>



<!--view table function start-->

<section id="viewtable2">
			<div class="container">
					<h6 style="color:#FFB600;">Available Tour Search</h6>
						<h1 style="color:white;">Search Your Desire Destination</h1><br>
					
					<center>
						<form method="POST">
							<input type="text" name="place" placeholder="Enter any place name where you want to go for vacation" onfocus="myFocus(this)"><br>
							<button class="btnsearch" type="submit" name="search">SEARCH</button>

						</form>
					</center><br><br>
					
					<h1 style="color:white;">Available Upcoming Tours</h1><br>
					
					<table class="paleBlueRows">
						<tr>
							<th>Place</th>
							<th>Duration</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Cost</th>
							<th>Booking Amount</th>
							<th>Booking Last Date</th>
							<th>Offer Amount</th>
							<th>Offer Date Till</th>
							<th>Transport</th>
						</tr>

			<!--database table view function start-->
			<?php

				$db_host = "localhost";
				$db_user = "root";
				$db_pass = "";
				$db_name = "phpdbms";
				
				//dbms connection build up
				$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
				
				
				/* For Checking Connection
				if($conn)
				{
					echo '<span style="color:green;text-align:center;">Database Connection Successfull!</span>'."<br>";
				}
				else
				{
					echo '<span style="color:red;text-align:center;">Database Connection failed!</span>'."<br>";
				} */
				
				if(isset($_POST['search']))
				{
					$place = $_POST['place'];
				
				$sql = "SELECT * FROM tour_details where place='$place'";
				$result = $conn-> query($sql);
				
				if ($result-> num_rows>0){
					while ($row = $result-> fetch_assoc()){
						echo 
						"<tr><td>". $row["place"]."</td><td>"
						.$row["duration"]."</td><td>"
						.$row["t_start_date"]."</td><td>"
						.$row["t_end_date"]."</td><td>"
						.$row["t_cost"]."</td><td>"
						.$row["b_amount"]."</td><td>"
						.$row["b_last_date"]."</td><td style='color:#006600 '>"
						.$row["o_cost"]."<td style='color:red'>"
						.$row["o_date_till"]."</td><td>"
						.$row["transport"]."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "<span style='color:yellow;'>"."<font size='10'>"."No tour available for you "."<i class='far fa-frown fa-lg'></i>"."</span>"."<br><br>";
					$conn-> close();
				}
				}
				

			?>
			<!--database table view function end-->
			</table><br><br>			
					
			
					
			</div>
</section>

<!-- importance Part -->
		<section id="about">
			<div class="container">
					<!-- Fees me content -->
					<div>
						<i class="fas fa-check-circle"></i>
						<h2>Essential Travel Accessories</h2>
						 <p>We travel as much as we can, as far as we can and for as long as we can. The wanderlust in us often makes us go away to far off lands and explore new places. When it comes to travelling, we book tickets, packs our bags and head off to have the time of our life. However, most of us overlook the fact that we need to carry certain travel accessories to make our journey comfortable and free of danger. We often forget to take certain items and end up searching them all the way.

						So, here is a list of must-have travel accessories to carry along with you-</p>
						 <!-- unorder list -->
						 <p style="text-align:center; margin-bottom:10px;color: #C70039 ;font-size:.8rem; margin-top:50px;">(Unorder List)</p>
						 <ul>
							  <li>Lifestraw</li>
							  <li>Universal Travel Adapter</li>
							  <li>Powerbank</li>
							  <li>E-luggage Scale</li>
							  <li>Eye Mask</li>
						</ul> 
						
						 <!-- order list -->
						 <p style="text-align:center; margin-bottom:10px;color: #C70039 ;font-size:.8rem; margin-top:50px;">(Order List)</p>
						 <ol>
							  <li>Ear Plug</li>
							  <li>Inflatable Neck Pillow</li>
							  <li>Safety Locks</li>
							  <li>Swiss Knife</li>
							  <li>First Aid Kit And Medicines</li>
						</ol> 
						
						 <!-- description list -->
						 <p style="text-align:center; margin-bottom:10px;color: #C70039 ;font-size:.8rem; margin-top:50px;">(Description List)</p>
						<dl>
							  <dt><b>Passport Cover</b></dt>
							  <dd>- You never want to lose your passport, do you? When you are out in a foreign land, you need to hold on to your passport more dearly than your life. A passport cover helps you to keep your passport safe from damages and also as identification in case it gets mixed up.</dd>
							  <dt><b>Reseable Plastic Bags</b></dt>
							  <dd>- People generally fail to assess the importance of carrying a resealable plastic bag with them. It is a handy item as they are good for organising, as well as when you have to pack something damp like a wet bathing suit or any item that might leak.</dd>
							  <dt><b>Shoe Cover</b></dt>
							  <dd>- A shoe cover is an essential travel accessory that basically helps you in carrying your shoes safely in your suitcase and protects them from being spoiled. It also comes in useful when your shoes become dirty, and you can’t find a proper way to carry it. So, carry a shoe cover with you and protect your shoes while separating them from other travel items.</dd>
							  <dt><b>Backpack Cover</b></dt>
							  <dd>- Whether you are going for hiking or trekking or simply for a regular walk, a backpack carries all your essential items right from your mobile phone, power bank, camera to every little thing you want along with you. To protect your backpack from sudden rains, always carry a Backpack Cover with you. Even the waterproof bags turn useless when it starts raining heavily. Plus, there is no harm in being extra careful.</dd>
							  <dt><b>Navigator and Magnetic Compass</b></dt>
							  <dd>- When you go on a vacation you explore new places, and who wants to get lost in an unknown land, right? A navigator is your saviour in such situations. It can help you to locate your way in case you are lost, or when you are looking for direction to an unknown place. Also, don’t forget to carry a magnetic compass with you if you are going on a hiking trip, as it will help you in finding direction in zero connectivity area.</dd>
						</dl>
						
						 <!-- nested list -->
						 <p style="text-align:center; margin-bottom:10px;color: #C70039 ;font-size:.8rem; margin-top:50px;">(Nested List)</p>
						<ul>
							  <li>Tripod/Selfie Stick</li>
							  <li>Torch/Hiking Lantern
								<ul>
								  <li>Binoculars</li>
								  <li>Travel Toiletry Bag</li>
								</ul>
							  </li>
							  <li>Nessessary Cloths as Tour Place</li>
						</ul>  
						<br><br><br>
						<br><br>
						
						<i class="fas fa-user-lock"></i>
						<h2>Terms and Conditions</h2>
						
						<h3>BOOKING PLICY:</h3>
						<P style="margin-bottom:5px;margin-top:5px;"> 1) Booking Has To Confirm 3 Days Before Travel Date. </p>

						<P style="margin-bottom:5px;margin-top:5px;"> 2) The Balance Amount Is To Be Paid 72 Hours Prior To The Commencement Of The Trip. </p>

						<P style="margin-bottom:5px;margin-top:5px;"> 3) We Accept Cash Both & Bkash Payment, any kinds of card. </p>

						<P style="margin-bottom:5px;margin-top:5px;"> 4) While you will pay at Bkash you have to extra charge as per Bkash rules wise. </p>
						<br>
					
						<h3>CANCELLATION POLICY:</h3>
						
						<p style="margin-bottom:5px;margin-top:5px;"> 1) While Canceling The Proposed Tour, You Should Inform Us Before 07(Seven) Days Of The Commencement Of The Journey. </p>

						<p style="margin-bottom:5px;margin-top:5px;"> 2) In This Case, 90% Payment Will Be Refunded. </p>
						<br>
					
						
						<h3>REFUND POLICY:</h3>
						<p style="margin-bottom:5px;margin-top:5px;"> 1) If The Cancellation Is Done Before 03 (Three) Days Payment Will Non-Refundable. </p>

						<p style="margin-bottom:5px;margin-top:5px;"> 2) No Refund or Any Changes Will Be Accepted At Last Minute Tour Starting Or After Starting Or Middle Of The Tour. </p>
						<br><br>
					
					</div>
			</div>
		</section>


		
<?php include 'include/footer.php';?>