<?php

session_start();

if(isset($_SESSION['name'])){
	if($_SESSION['name'] == "Loni"){
		$_SESSION['name'] = "Hemanta";
	}
	else{
		$_SESSION['name'] = "Loni";
	}	
}
else{
	$_SESSION['name'] = "Loni";
}

echo $_SESSION['name'];
?>