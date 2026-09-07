<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "malonzo_act2b";

//create connection
$conn = new mysqli($host, $user, $pass , $db);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
else{
    echo "DB SUCCESSFULLY CONNECTED";
}
?>