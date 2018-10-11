<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#create").click(function(){
        $.ajax({url: "api.php", success: function(result){
			},data: {/* DATA */}
			,type:"POST"});
    });
	
	$("#get").click(function(){
		// PROMPT
        $.ajax({url: "api.php", success: function(result){
			console.log(JSON.parse(result));
			},data: {id:/* INPUT */}
			,type:"GET"});
    });
	
	$("#delete").click(function(){
       // PROMPT
	   $.ajax({url: "api.php?id=" + /* INPUT /*, success: function(result){
			},type:"DELETE"});
    });
});
</script>
</head>
<body>

<button id="create">CREATE USER</button>
<button id="get">GET USER</button>
<button id="delete">DELETE USER</button>

</body>
</html>