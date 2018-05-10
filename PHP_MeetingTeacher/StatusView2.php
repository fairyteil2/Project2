<?
	include_once("conn.php");
	
	$query = "SELECT * FROME 'teacher' ORDER BY name ASC";
	
	$result = mysqli_query($conn, $query);
	$number_of_rows = mysql_num_rows($result);
	
	$response = array();
	
	if($number_of_rows > 0){
		while($row = mysqli_fetch_assoc($result)){
			$response[] = $rom;
		}
	}
	header('Content-Type:application/json');
	echo json_encode(array("semuaProv" => $respons));
	mysqli_close($conn);



?>