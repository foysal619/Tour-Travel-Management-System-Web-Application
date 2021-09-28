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
<!-- Sidebar Start -->
<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Panel</h2>
		<h5>Tour Controller</h5>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-house-damage"></i>Home</a></li>
            <li><a href="dashboard-add.php"><i class="fas fa-plus-circle"></i>Insert Details</a></li>
            <li class="active"><a href="dashboard-delete.php"><i class="fas fa-trash-alt"></i>Delete Details</a></li>
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
<!-- Sidebar End -->

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

<!--delete function start-->
<div id="main" class="main">

		<h2 class="title_area">Select Tour Name</h2><br>
        <form style="text-align:center;" action="dashboard-delete.php" method="post">
			<p style="color:#0023fe "><b><span style="text-decoration:underline;">Note:</span></b> First Select Your Desire Tour Place From Dropdown & Press "DELETE ENTIRE COLUME" Button for Delete. After That You Need to Refresh The Page By Pressing "REFRESH" Button </p><br>
            <!-- this are used for show id  -->
            <h3>Tour Place Name:</h3><br>
            <select name="delete_place" >
                <?php while($row = mysqli_fetch_array($result)):;?>
				<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
				<?php endwhile;?>
			</select><br><br>


            <button class="btnsignup" type="submit" name="delete">DELETE ENTIRE COLUME</button>




            <?php
                if(isset($_POST['delete'])){

                        $place_delete= $_POST['delete_place'];

                        $query="DELETE FROM tour_details WHERE place='$place_delete'";

                        $data= mysqli_query($conn,$query);

                        echo " <br> Tour Place: "."<b>".$place_delete."</b>";
                        if($data){
                            echo '<br>'.'<span style="color:green;text-align:center;">Successfully Deleted!</span>'.'<br>'.'<span style="color:#594f8d;text-align:center;">Now Press "REFRESH" Button!</span>';
                            }else{
                                echo 'Not Delete';
                        }

                }

            ?>
			<button class="btnsignup" type="submit" action="admin_dashboard/dashboard-delete.php">REFRESH</button>

         </form>
</div>
<!--delete function end-->

</body>
</html>
