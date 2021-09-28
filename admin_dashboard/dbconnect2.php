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