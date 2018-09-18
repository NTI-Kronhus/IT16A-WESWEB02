<?php

session_start();

$dbc = mysqli_connect("localhost","root","","chat");


if(isset($_GET['msg']) && isset($_SESSION['user_name'])){
	
	$msg = $_GET['msg'];
	$usr = $_SESSION['user_name'];
	
	$query = "INSERT INTO chatlog (username,message) VALUES ('$usr','$msg');";
	mysqli_query($dbc,$query);
	
}

$query = "SELECT * FROM (SELECT * FROM chatlog ORDER BY time DESC LIMIT 18) AS result ORDER BY time ASC;";

$result = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){
	
	echo "Kl " . substr($row['time'],11,5) . " skrev " . $row['username'] . " : " . $row['message'] . "<br>";
	
}

?>