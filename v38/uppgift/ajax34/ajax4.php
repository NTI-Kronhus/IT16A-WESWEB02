<!DOCTYPE html>
<html>
<body>


<div id="demo">

</div>
<script>


function send() {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "get_data.php", true);
  xhttp.send();
}

setInterval(send,100);
</script>

</body>
</html>
