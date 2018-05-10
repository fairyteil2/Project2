<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";
	$name = $_POST["name"];
	$studentid = $_POST["studentid"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	
	$query = "INSERT INTO student (name, studentid, username, password) values 
	('$name', '$studentid', '$username', '$password');";
	mysqli_query($conn,$query)or die (mysqli_error($conn));
	mysqli_close($conn);
	
	$response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
}
?>
