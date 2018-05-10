<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";
	$id = $_POST["id"];
	$subjectname = $_POST["subjectname"];
	$year = $_POST["year"];
	$semester = $_POST["semester"];
	
	$Sql_Query = "UPDATE course2 SET subjectname= '$subjectname', year= '$year', semester= '$semester'
	WHERE id = $id";

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