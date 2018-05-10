<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";

	$name = $_POST["name"];
	$username = $_POST["username"];
	$room = $_POST["room"];
	$password = $_POST["password"];
	$status = $_POST["status"];

	$Sql_Query = "INSERT INTO teacher (name,username,room, password, status ) values
	('$name','$username','$room','$password','$status');";

	if(mysqli_query($conn,$Sql_Query))
	{
		echo "Registered Successfully";
	}
		else
	{
		echo "Something went wrong";
	}
	}
 mysqli_close($conn);
?>