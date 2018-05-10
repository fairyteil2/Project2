<?php
    $con = mysqli_connect("student.coe.phuket.psu.ac.th", "s5635512070_322", "8O6rwC0j", "s5635512070_322");
 
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM student WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $studentID, $name, $studentid, $username, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["name"] = $name;
		$response["studentid"] = $studentid;
        $response["username"] = $username;
        $response["password"] = $password;
    }
    echo json_encode($response);
?>
