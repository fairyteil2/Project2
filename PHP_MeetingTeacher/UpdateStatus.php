<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";
	$id = $_POST["id"];
	$name = $_POST["name"];
	$username = $_POST["username"];
	$room = $_POST["room"];
	$password = $_POST["password"];
	$status = $_POST["status"];
	
	$Sql_Query = "UPDATE teacher SET name= '$name', username= '$username', room= '$room', 
	password= '$password', status= '$status' WHERE id = $id";

	if(mysqli_query($conn,$Sql_Query))
	{
		echo "Updated Successfully";
	}
		else
	{
		echo "Something went wrong";
	}
 }
 mysqli_close($conn);
?>