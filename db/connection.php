<?php

$host = "localhost";
$user = "root";
$password = "12345678";
$db = "pc-only-forum";

$conn = mysqli_connect($host,$user,$password,$db);
if(!$conn){
    echo "<h1>Connection is Unable to Establish.</h1>";
}

?>