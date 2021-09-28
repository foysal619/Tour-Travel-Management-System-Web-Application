<?php include 'include/navbar.php';?>
<!-- signup Part -->
		<section id="signup">
		<div class="signup-box">
			<h1>SignUp</h1><br><br><br><br><br><br><br><br><br><br><br>
			<?php
				$db_host = "localhost";
				$db_user = "root";
				$db_pass = "";
				$db_name = "phpdbms";
				
				//dbms connection build up
				$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
				/* if($conn)
				{
					echo "Database Connection Successfull!"."<br>";
				}
				else
				{
					echo "Database Connection failed!\n"."<br>";
				}
				*/
				//getting data from html form
				if(isset($_POST["submit"])){
					$name= $_POST["name"];
					$username= $_POST["username"];
					$email= $_POST["email"];
					$phone= $_POST["phone"];
					$password= $_POST["password"];
					
					$sql = "INSERT INTO `user`(`Name`, `Username`, `Email`, `Phone`, `Password`) VALUES ('$name','$username','$email','$phone','$password')";
					$check = mysqli_query($conn,$sql);
					 if($check)
						{
							echo "<span style='color:#00FF00;'>"."Your Signup Successfully Completed."."</span>"."<br>";
						}
						else
						{
							echo "<span style='color:#f70d1a;'>"."Your signup failed! Try Again!"."</span>"."<br>";
						} 
						
				}
			?>
			<form method="post" action="signup.php">	
				<div class="textbox">
					<input type="text"  name="name" placeholder="Name">
				</div>
				
				<div class="textbox">
					<input type="text" name="username" placeholder="Username">
				</div>
				
				<div class="textbox">
					<input type="email" name="email" placeholder="Email" >
				</div>
				
				
				<div class="textbox">
					<input type="phone" name="phone" placeholder="Cell" >
				</div>
				
				
				<div class="textbox">
					<input type="password" name="password" placeholder="Password">
				</div>
				<br>
				<button class="btnsignup" type="submit" name="submit">SIGNUP</button>
			</form>
		</div>
		</section>
		
<?php include 'include/footer.php';?>