<?php

if(isset($_GET['data'])){

	$dbc = mysqli_connect("localhost","root","","ajax3");


	$data = $_GET['data'];


	$query = "INSERT INTO data VALUES ('$data')";

	mysqli_query($dbc,$query);
	
}



?>