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

<!-- Sidebar Start -->
<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Panel</h2>
		<h5>Tour Controller</h5>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-house-damage"></i>Home</a></li>
            <li><a href="dashboard-add.php"><i class="fas fa-plus-circle"></i>Insert Details</a></li>
            <li><a href="dashboard-delete.php"><i class="fas fa-trash-alt"></i>Delete Details</a></li>
            <li class="active"><a href="dashboard-update.php"><i class="fas fa-edit"></i>Update Details</a></li>
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

<!--dbms connection function start-->
<div style="text-align:center;">
<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "phpdbms";

	//dbms connection build up
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if($conn)
	{
		echo '<span style="color:green;text-align:center;">Database Connection Successfull!</span>'."<br>";
	}
	else
	{
		echo '<span style="color:red;text-align:center;">Database Connection failed!</span>'."<br>";
	}
	$query = "SELECT * FROM `tour_details`";
	$result=mysqli_query($conn, $query);


?>
</div>
<!--dbms connection function end-->

<!--update function start-->
<div id="main" class="main">
	<h2 class="title_area">Update Tour Details</h2><br>

<div style="text-align:center;">

   <?php
        //getting data from html form
	if(isset($_POST['update'])){
		$place_update= $_POST['update_place'];
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

		$sql = "UPDATE tour_details SET
		`place`='$place',
		`duration`='$duration',
		`t_start_date`='$t_start_date',
		`t_end_date`='$t_end_date',
		`t_cost`='$t_cost',
		`b_amount`='$b_amount',
		`b_last_date`='$b_last_date',
		`o_cost`='$o_cost',
		`o_date_till`='$o_date_till',
		`transport`='$transport'
		WHERE `place`='$place_update'";


		$check = mysqli_query($conn,$sql);
		if($check)
			{
				echo '<span style="color:green;text-align:center;">Update of Tour Details is Successfull!</span>'."<br><br>";
			}
			else
			{
				echo '<span style="color:red;text-align:center;">Update of Tour Details is failed!</span>'."<br><br>";
			}
	}
    ?>
</div>

        <form action="dashboard-update.php" method="post">
			<p style="color:#0023fe; text-align:center; "><b><span style="text-decoration:underline;">Note:</span></b> First Select Your Desire Tour Place From Dropdown & Fill All The New Data From Below and Press "UPDATE" Button for Update in DATABASE. After That You Need to Refresh The Page By Pressing "REFRESH" Button for Next Update. </p><br>
            <!-- this are used for show id  -->
            <h3 style="color:#900C3F;">Select a Tour Place Name for Update:</h3><br>
			<select name="update_place" >
                <?php while($row = mysqli_fetch_array($result)):;?>
				<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
				<?php endwhile;?>
			</select><br><br><br>



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

				<button class="btnsignup" type="submit" name="update">UPDATE</button>
				<button class="btnsignup" type="submit" action="dashboard-update.php">REFRESH</button>
			</form>
</div>
<!--update function end-->
</body>
</html>
