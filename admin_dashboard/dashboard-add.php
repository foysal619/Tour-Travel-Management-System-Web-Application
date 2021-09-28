<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FM Travels LTD || Tour Agency</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="../images/favicon.ico" type="images/x-icon">
	<!-- Fontawsome sheet -->
		<link rel="stylesheet" href="css/all.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<!--navbar function start-->
<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Panel</h2>
		<h5>Tour Controller</h5>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-house-damage"></i>Home</a></li>
            <li class="active"><a href="dashboard-add.php"><i class="fas fa-plus-circle"></i>Insert Details</a></li>
            <li><a href="dashboard-delete.php"><i class="fas fa-trash-alt"></i>Delete Details</a></li>
            <li><a href="dashboard-update.php"><i class="fas fa-edit"></i>Update Details</a></li>
            <li><a href="dashboard-view-table.php"><i class="fas fa-eye"></i>View Tour Table</a></li>
        </ul>
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
</div>
<!--navbar function end-->

<!--this is for dbms connection function start-->
<?php

include('dbconnect2.php');

?>
<!--this is for dbms connection function end-->

<!--insert function start-->
<div id="main" class="main">

		<h2 class="title_area">Insert Tour Details</h2><br>
<div style="text-align:center;">

   <?php
        //getting data from html form
	if(isset($_POST["insert"])){
		$place= $_POST["place"];
		$duration= $_POST["duration"];
		$t_start_date= $_POST["t_start_date"];
		$t_end_date= $_POST["t_end_date"];
		$t_cost= $_POST["t_cost"];
		$b_amount= $_POST["b_amount"];
		$b_last_date= $_POST["b_last_date"];
		$o_cost= $_POST["o_cost"];
		$o_date_till= $_POST["o_date_till"];
		$transport= $_POST["transport"];


		$sql = "INSERT INTO `tour_details`(`place`, `duration`, `t_start_date`, `t_end_date`, `t_cost`, `b_amount`, `b_last_date`, `o_cost`, `o_date_till`, `transport`) VALUES ('$place','$duration','$t_start_date','$t_end_date','$t_cost','$b_amount','$b_last_date','$o_cost','$o_date_till','$transport')";

		$check = mysqli_query($conn,$sql);
		if($check)
			{
				echo '<span style="color:green;text-align:center;">Insertion of Tour Details is Successfull!</span>'."<br><br>";
			}
			else
			{
				echo '<span style="color:red;text-align:center;">Insertion of Tour Details is failed!</span>'."<br><br>";
			}
	}
    ?>
</div>

			<form action='dashboard-add.php' method='post'>

				<h3>Tour Place Name:</h3>
				<input class="username" type="text" name="place" placeholder="Tour Place Name"/><br><br>
				<h3>Tour Duration:</h3>
				<input type="radio" name="duration" value="3days"> 3 days<br>
				<input type="radio" name="duration" value="5days"> 5 days<br>
				<input type="radio" name="duration" value="7days"> 7 days <br><br>

				<h3>Tour Date:</h3>
				<input type="date" name="t_start_date" max="2030-30-12"><h4>To</h4>
				<input type="date" name="t_end_date" min="2019-01-01"><br><br>

				<h3>Tour Cost:</h3>
				<input type="number" class="text" step="500" name="t_cost" min="2000" max="10000"> <br><br>

				<h3>Booking Amount (Min):</h3>
				<input type="text" name="b_amount" class="text" placeholder="Enter Booking Amount"> <br><br>


				<h3>Booking Last Date:</h3>
				<input type="date" name="b_last_date"><br><br>

				<h3>Offer Cost:</h3>
				<input type="text" class="text" name="o_cost" placeholder="Enter Offer Cost"><br><br>

				<h3>Offer Date Till:</h3>
				<input type="date" class="text" name="o_date_till"><br><br>

				<h3>Tour Transport Type:</h3>
				<p>(Please Check Only One)</p>
				<input type="checkbox" name="transport" value="Bus"> Bus<br>
				<input type="checkbox" name="transport" value="Train"> Train <br>
				<input type="checkbox" name="transport" value="Car"> Car <br><br>

				<button class="btnsignup" type="submit" name="insert">INSERT</button>

			</form>
</div>
<!--insert function end-->
</body>
</html>
