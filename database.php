<?php
$server="localhost";
$username="root";
$password="";
$database="shikshadb";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
 
    die("ERROR: could not connect. " .mysqli_connect_error());
    echo "database error";
}
?>