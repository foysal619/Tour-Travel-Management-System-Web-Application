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
		/* if($check)
			{
				echo "insert success full\n"."<br>";
			}
			else
			{
				echo "insert failed\n"."<br>";
			} 
			*/
	}
?>