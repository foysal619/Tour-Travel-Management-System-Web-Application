<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FM Travels LTD || Tour Agency</title>
	<link rel="stylesheet" href="css/styles.css">
	<!-- Fontawsome sheet -->
		<link rel="stylesheet" href="css/all.css">
		<link rel="icon" href="../images/favicon.ico" type="images/x-icon">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Panel</h2>
		<h5>Tour Controller</h5>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-house-damage"></i>Home</a></li>
            <li><a href="dashboard-add.php"><i class="fas fa-plus-circle"></i>Insert Details</a></li>
            <li><a href="dashboard-delete.php"><i class="fas fa-trash-alt"></i>Delete Details</a></li>
            <li><a href="dashboard-update.php"><i class="fas fa-edit"></i>Update Details</a></li>
            <li class="active"><a href="dashboard-view-table.php"><i class="far fa-eye"></i> View Tour Table</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
</div>






<!--view table function start-->
<div class="main2">

		<h2 class="title_area">Tour Details Table</h2><br>
		
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
			.$row["b_last_date"]."</td><td>"
			.$row["o_cost"]."</td><td>"
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
</table>			
		
</div>
</body>
</html>