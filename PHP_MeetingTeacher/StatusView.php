 <?php
    $host='student.coe.phuket.psu.ac.th';
    $username='s5635512070_322';
    $pwd='8O6rwC0j';
    $db="s5635512070_322";

    $con=mysqli_connect($host,$username,$pwd,$db) or die('Unable to connect');

    if(mysqli_connect_error($con))
    {
        echo "Failed to Connect to Database ".mysqli_connect_error();
    }
	$sql = "SELECT * FROM teacher";
	
    $result = mysqli_query($con,$sql);
	if($result){
		while($row = mysqli_fetch_array($result))
		{
			$data[] = $row;
		}
		print(json_encode($data));
	}
    mysqli_close($con);
?>

