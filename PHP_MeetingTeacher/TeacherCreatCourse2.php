<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";

	$subjectname = $_POST["subjectname"];
	$year = $_POST["year"];
	$semester = $_POST["semester"];
	$teachername = $_POST["teachername"];

	$Sql_Query = "INSERT INTO course2 (subjectname,year,semester,teachername) values
	('$subjectname','$year','$semester','$teachername');";

	if(mysqli_query($conn,$Sql_Query))
	{
		echo "Crate Successfully";
	}
		else
	{
		echo "Something went wrong";
	}
	}
 mysqli_close($conn);
?>