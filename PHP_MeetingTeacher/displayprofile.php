<?php
$host='student.coe.phuket.psu.ac.th';
    $username='s5635512070_322';
    $pwd='8O6rwC0j';
    $db="s5635512070_322";

    $con=mysqli_connect($host,$username,$pwd,$db) or die('Unable to connect');

if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}

$query=mysqli_query($con,"SELECT * FROM teacher");

if($query)
{
while($row=mysqli_fetch_array($query))
	{
	$flag[]=$row;
	}
print(json_encode($flag));
}
mysqli_close($con);
?>


