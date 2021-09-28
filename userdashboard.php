<?php include 'include/navbar.php';?>
<!-- Contact me Part -->
		<section id="contact">
			<div class="container">
					<h6>welcome to the dashboard</h6>
					<a href="userlogout.php">Logout</a>
					
			</div>		
		</section>
		<?php
		 session_start();
		 if($_SESSION["username"]==true)
		 {
		 echo "Welcome"." ".$_SESSION["username"]." !";
		 }
		 else{
			 header('location:login.php');
		 }
		?>
		

<?php include 'include/footer.php';?>