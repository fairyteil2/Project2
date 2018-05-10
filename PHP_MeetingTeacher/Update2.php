<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "conn.php";
	$name = $_POST["name"];
	$username = $_POST["username"];
	$room = $_POST["room"];
	$password = $_POST["password"];
	$status = $_POST["status"];
	
	$query = "UPDATE teacher SET name= '$name', username= '$username', room= '$room', 
	password= '$password', status= '$status' WHERE id = $id";
	mysqli_close($conn);
	
	$response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
}
?>