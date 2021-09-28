<?php include 'include/navbar.php';?>
<?php include('dbconnection/userloginconn.php'); ?>
<!-- signup Part -->
		<section id="login">
		<div class="login-box">
			<h1>Login</h1>
			<nav id="main-menu">
			<ul>
				<li class="active"><a class="btn" style="border-radius: 20px; margin-bottom:10px;" href="login.php">User</a></li>
				<li><a class="btn" style="border-radius: 20px; margin-bottom:10px;" href="adminlog.php">Admin</a></li>
			</ul>
			<br><br>
		</nav>
			<form method="post" action="login.php">
				<div class="textbox">
					<input type="username" name="username" placeholder="Username" >
				</div>
				
				<div class="textbox">
					<input type="password" name="password" placeholder="Password">
				</div>
				<br>
				
				<button class="btnlogin" type="submit" name="userlogin">LogIn</button>
			</form>
		</div><br><br><br><br>
		</section>
		
<?php

    session_start();
    if(isset($_POST['userlogin'])){
        $username= $_POST['username'];
        $password= $_POST['password'];

        $quary="SELECT * FROM user WHERE username='$username' && password='$password'";
        $data= mysqli_query($connt,$quary);
        $total= mysqli_num_rows($data);
        
        if($total==1){
			$_SESSION["username"]=$username;
			header("location:user_dashboard/dashboard.php");
            echo 'Successfully Login'.$total;
            
        }
        else{
            echo 'Wrong username or password'.$total;
        }



    }

?>
		
<?php include 'include/footer.php';?>