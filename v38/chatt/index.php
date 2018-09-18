<!DOCTYPE html>
<html>

<head>
<script>

function showChat(){
	document.getElementById("chat").style.display = "block";
	setInterval(updateChatLog,100);
}

function updateChatLog(){
	
	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("text").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "chatlog.php", true);
	  xhttp.send();
}

function sendMsg(){
	
	var msg = document.getElementById("msg").value;

	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("text").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "chatlog.php?msg="+msg , true);
	  xhttp.send();
	
}

</script>

<style>

#chat{
	width:500px;
	height:400px;
	border:solid black 2px;
	display:none;
	
}



#input{
	

}

#text{
	height:350px;
overflow:scroll;}

#input input{
	height:50px;
}
</style>
</head>

<body>

<div id="chat">

<div id="text"> 

</div>

<div id="input">
	<input id="msg" name="chat"> </input> 
	<input type="submit" onClick="sendMsg()"> </input>
</div>

</div>


<?php
session_start();
if(isset($_GET['user_name'])){
	$_SESSION['user_name'] = $_GET['user_name'];
}

if(isset($_SESSION['user_name'])){
	?>
	
	<script>
	showChat();
	</script>

	<?php
	
}
else{
	
	?>
	
	<script>
	var user_name = prompt("Vad heter du?");
	
	if(user_name != null && user_name != ""){
	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			showChat();
		}
	  };
	  xhttp.open("GET", "?user_name=" + user_name, true);
	  xhttp.send();
	}
	</script>

	<?php
}


?>


</body>
</html>
