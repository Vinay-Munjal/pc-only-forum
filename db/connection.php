<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "NEW";

$conn = mysqli_connect($host,$user,$password,$db);
if(!$conn){
    echo "<h1>Connection is Unable to Establish.</h1>";
}

?>