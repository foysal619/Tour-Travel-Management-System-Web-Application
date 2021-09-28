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
            <li class="active"><a href="dashboard.php"><i class="fas fa-house-damage"></i>Home</a></li>
            <li><a href="dashboard-add.php"><i class="fas fa-plus-circle"></i>Insert Details</a></li>
            <li><a href="#dashboard-delete.php"><i class="fas fa-trash-alt"></i>Delete Details</a></li>
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
	<div id="main" class="main">
	<h2 class="title_area">Welcome To The Dashboard!</h2><br>

	<div style="text-align:center;">				
		<?php
		 session_start();
		 if($_SESSION["username"]==true)
		 {
		 echo "<br>"."<span style='color:#C70039;'><h3>"."Hi"." ".$_SESSION["username"]." !"."</h3></span>";
		 }
		 else{
			 header('location:../login.php');
		 }
		?>
		<br>
		<button class="btn userlogout" onclick="window.location.href = 'userlogout.php';" type="submit">Logout</button>
    </div>
</div>

</body>
</html>
