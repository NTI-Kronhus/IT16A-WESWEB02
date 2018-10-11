<?php

$dbc = mysqli_connect("localhost","root","","abdo");

if($_SERVER['REQUEST_METHOD'] == "POST"){ // SKAPA NYTT

	if(isset($_POST['name']) && isset($_POST['age']) &&isset($_POST['mail']) &&isset($_POST['password'])){
		
		// HÄMTA $_POST
		// INSERT INTO
		
	}
	
}
else if($_SERVER['REQUEST_METHOD'] == "GET"){ // HÄMTA BEFINTLIGT

	if(isset($_GET['id'])){
		
		// HÄMTA $_GET
		// SELECT
		
		
		if($row = mysqli_fetch_array($result)){
			echo '{"id":"'.$row['id'].'",';
			echo '"name":"'.$row['name'].'",';
			echo '"age":"'.$row['age'].'",';
			echo '"mail":"'.$row['mail'].'",';
			echo '"password":"'.$row['password'].'"}';
		}
		else{
			echo '{"id":"0"}';
		}
	}

}
else if($_SERVER['REQUEST_METHOD'] == "PULL"){ // UPPDATERA BEFINTLIGT
	
}
else if($_SERVER['REQUEST_METHOD'] == "DELETE"){ // TA BORT BEFINTLIGT
	if(isset($_GET['id'])){
		
		// HÄMTA $_GET
		// DELETE
		
	}
		
}

?>