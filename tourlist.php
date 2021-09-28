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
			<li><a href="index.php">Home</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#service">Services</a></li>
			<li><a href="#review">Achivement</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li  class="active"><a href="tourlist.php">Tour List</a></li>
			<li><a href="toursearch.php">Search & Importance</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="signup.php">SignUp</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="login.php">Login</a></li>
			</ul>
		</nav>
		</header>
<main>
		
<!--view table function start-->

<section id="viewtable">
			<div class="container">
					<h6 style="color:#FFB600;">Upcoming</h6>
						<h1 style="color:white;">Tour Schedules</h1><br>
					
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
				
				
				$sql = "SELECT place, duration, t_start_date, t_end_date, t_cost, b_amount, b_last_date, o_cost, o_date_till, transport from tour_details";
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
						.$row["b_last_date"]."</td><td style='color: 	#006600 '>"
						.$row["o_cost"]."<td style='color:red'>"
						.$row["o_date_till"]."</td><td>"
						.$row["transport"]."</td></tr>";
					}
					echo "</table>";
				}
				else{
					$conn-> close();
				}
				

			?>
			<!--database table view function end-->
			</table><br><br>			
					
			
					<h6 style="color:#FFB600;">Finished</h6>
						<h1 style="color:white;">Last Tours</h1><br>
					
					<table class="paleBlueRows">
						<tr>
							<th>Place</th>
							<th>Duration</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Cost</th>
							<th>Transport</th>
						</tr>
						<tr>
							<td>Nafakhum</td>
							<td>3days</td>
							<td>2019-01-03</td>
							<td>2019-01-06</td>
							<td>7900</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Kuakata</td>
							<td>3days</td>
							<td>2019-01-15</td>
							<td>2019-01-18</td>
							<td>7100</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Sylhet</td>
							<td>3days</td>
							<td>2019-02-21</td>
							<td>2019-02-23</td>
							<td>5300</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Monipuri Lifestyle Experience</td>
							<td>1day</td>
							<td>2019-03-06</td>
							<td>2019-03-07</td>
							<td>2700</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Tanguar Haor</td>
							<td>2days</td>
							<td>2019-03-11</td>
							<td>2019-03-14</td>
							<td>4400</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Nijhum Dwip</td>
							<td>3days</td>
							<td>2019-04-09</td>
							<td>2019-04-12</td>
							<td>6100</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Keoradong</td>
							<td>4days</td>
							<td>2019-04-25</td>
							<td>2019-04-29</td>
							<td>5900</td>
							<td>Train</td>
						</tr>
						<tr>
							<td>Bandarban</td>
							<td>2day</td>
							<td>2019-05-02</td>
							<td>2019-05-04</td>
							<td>5500</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Sundarban</td>
							<td>2days</td>
							<td>2019-05-19</td>
							<td>2019-05-21</td>
							<td>4700</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Saintmartin</td>
							<td>3days</td>
							<td>2019-06-15</td>
							<td>2019-06-18</td>
							<td>6100</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Sajek Valley</td>
							<td>2days</td>
							<td>2019-07-22</td>
							<td>2019-07-24</td>
							<td>4900</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Cox's Bazar</td>
							<td>3days</td>
							<td>2019-08-07</td>
							<td>2019-08-10</td>
							<td>5700</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Chittagong</td>
							<td>4days</td>
							<td>2019-09-23</td>
							<td>2019-09-27</td>
							<td>4600</td>
							<td>Train</td>
						</tr>
					</table>><br><br>
			</div>
</section>


<!-- Fees Part -->
		<section id="about">
			<div class="container">
					<!-- Fees me content -->
					<div>
						<i class="fas fa-dollar-sign"></i>
						<h2>Tour Fees</h2>
					
						<h3>FEES INCLUDES:</h3>
						<p style="margin-bottom:10px; margin-top:10px;"> => From Dhaka Non AC Bus Ticket. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => Travel Transport in Tour Places. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => Good Hotel/Resort for Accomodation. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => Meals as per hotel plane. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => Transfer & sightseeing as per the itinerary by Non A/C Vehicle. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => All Entrance fees, parking fees & driver allowances. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => All service charge & VAT. </p><br>
					
						<h3>FEES EXCLUDES:</h3>
						
						<p style="margin-bottom:10px; margin-top:10px;"> => All personal expenses, optional tours and extra meals. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => Anything not mentioned under 'Package Inclusions'. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => Tips, laundry and phone calls. </p>
						<p style="margin-bottom:10px; margin-top:10px;"> => Services of the vehicle on leisure days and for sightseeing not included in the itinerary. </p>

					</div>
			</div>
		</section>

	
<?php include 'include/footer.php';?>