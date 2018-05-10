<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";

	$subjectname = $_POST["subjectname"];
	$year = $_POST["year"];
	$semester = $_POST["semester"];
	$studentname = $_POST["studentname"];
	$teachername = $_POST["teachername"];
	
	$Sql_Query = "INSERT INTO student_course2 (subjectname,year,semester, studentname, teachername ) values 
	('$subjectname','$year','$semester','$studentname','$teachername');";

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