<?php

if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['height']) && isset($_GET['address'])){
    
    
    $name = "Joakim";
    // Skriv ut som med JSON-format
    echo '{';
    echo '"name":"';
    echo $name;
    echo '","age":';
    echo $_GET['age'];
    echo ',"height":';
    echo $_GET['height'];
    echo ',"address":"';
    echo $_GET['address'];
    echo '"}';
    
}




?>