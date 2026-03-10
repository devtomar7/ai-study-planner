<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<h2>Welcome to AI Study Planner</h2>

<a href="index.php">Create Study Plan</a>

<br><br>

<a href="logout.php">Logout</a>
