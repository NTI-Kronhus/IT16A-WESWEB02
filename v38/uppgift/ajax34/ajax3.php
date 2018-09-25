<!DOCTYPE html>
<html>
<body>

<input type="text" id="data" > </input>
<button type="button" onclick="send()">Send Data</button>

<script>
function send() {
	
	var data = document.getElementById("data").value;
	
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("data").value = "";
    }
  };
  xhttp.open("GET", "send_data.php?data=" + data, true);
  xhttp.send();
}
</script>

</body>
</html>
