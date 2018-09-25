<?php


$dbc = mysqli_connect("localhost","root","","ajax3");

$query = "SELECT * FROM data";

$result = mysqli_query($dbc,$query);

echo "<h1> All Data: </h1>";
$i = 0;
while($row = mysqli_fetch_array($result)){
	$i++;
	echo $i . ": " . $row['data'] . "<br>";
}

if($i >= 29){
	$limit = $i-29;
	$query = "DELETE FROM data LIMIT $limit";
	mysqli_query($dbc,$query);	
}
	




?>