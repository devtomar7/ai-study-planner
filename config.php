<?php
$conn = mysqli_connect("localhost","root","","aistudyplanner");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>