<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.ajax({url: "get.php", success: function(result){
            console.log(JSON.parse(result));
        }});
    });
});
</script>
</head>
<body>

<button>Get External Content To Console</button>

</body>
</html>
