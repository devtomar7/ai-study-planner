<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$_SESSION['user']=$email;

header("Location: dashboard.php");

}else{
echo "Login Failed";
}

}
?>

<form method="post">

<h2>Login</h2>

<input type="email" name="email" placeholder="Email"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button name="login">Login</button>

</form>