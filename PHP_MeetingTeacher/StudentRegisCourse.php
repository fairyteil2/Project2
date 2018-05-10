<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";
	$id = $_POST["id"];
	$subjectname = $_POST["subjectname"];
	$year = $_POST["year"];
	$semester = $_POST["semester"];
	$teachername = $_POST["teachername"];

	$Sql_Query = "INSERT INTO student_course2 (subjectname,year,semester,teachername) values ('$subjectname','$year','$semester','$teachername');"; 


	if(mysqli_query($conn,$Sql_Query))
	{
		echo "Register Successfully";
	}
		else
	{
		echo "Something went wrong";
	}
 }
 mysqli_close($conn);
?>