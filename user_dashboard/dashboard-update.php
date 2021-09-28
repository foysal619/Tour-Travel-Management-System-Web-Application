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
        <h2>User Panel</h2>
		<h5>Profile Controller</h5>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-house-damage"></i>Home</a></li>
            <li class="active"><a href="dashboard-update.php"><i class="fas fa-edit"></i></i>Update Details</a></li>
            <li><a href="dashboard-view-table.php"><i class="fas fa-eye"></i></i>View Tour Table</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
</div>

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
	
	
?>
</div>
<!--dbms connection function end-->
	
<!--update function start-->	
<div id="main" class="main">
	<h2 class="title_area">Update Your Details</h2><br>
		
<div style="text-align:center;">
   
   <?php
   session_start();
        //getting data from html form
	if(isset($_POST['update'])){
		$name= $_POST["name"];
		$username= $_POST["username"];
		$email= $_POST["email"];
		$phone= $_POST["phone"];
		$password= $_POST["password"];
		
		$sql = "UPDATE user SET 
		`name`='$name', 
		`username`='$username', 
		`email`='$email', 
		`phone`='$phone', 
		`password`='$password' 
		WHERE `username`='$_SESSION[username]'";
		
		
		$check = mysqli_query($conn,$sql);
		if($check)
			{
				echo '<span style="color:green;text-align:center;">Your Details Updated Successfully!</span>'."<br><br>";
			}
			else
			{
				echo '<span style="color:red;text-align:center;">Your Details Update is failed!</span>'."<br><br>";
			}
	}
    ?>
</div>
	
        <form action="dashboard-update.php" method="post">
			<p style="color:#0023fe; text-align:center; "><b><span style="text-decoration:underline;">Note:</span></b> Fill All The New Data From Below and Press "UPDATE" Button for Update in DATABASE.</p><br>
            <!-- this are used for show id  -->

				<h3>Name:</h3>
				<input type="text" name="name" placeholder="Enter New Name"><br><br>
				<h3>Username:</h3>
				<input type="text" name="username" placeholder="Enter New Username" value="<?php echo $_SESSION['username'];?>"><br><br>
				
				<h3>Email:</h3>
				<input type="text" name="email" placeholder="Enter New Email"><br><br>
				
				<h3>Phone:</h3>
				<input type="text" name="phone" placeholder="Enter New Phone"><br><br>
				
				<h3>Password:</h3>
				<input type="password" name="password" placeholder="Enter New Password"><br><br>
				
				<button class="btnsignup" type="submit" name="update">UPDATE</button> 
		</form>
</div>
<!--update function end-->
</body>
</html>