<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";
	$name = $_POST["name"];
	$username = $_POST["username"];
	$room = $_POST["room"];
	$password = $_POST["password"];
	$status = $_POST["status"];

	$query = "INSERT INTO teacher (name, username, room, password, status) values 
	('$name', '$username', '$room', '$password', '$status');";
	mysqli_query($conn,$query)or die (mysqli_error($conn));
	mysqli_close($conn);
	
	$response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
}
?>
