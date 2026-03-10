<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php";

if(isset($_POST['register'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username,email,password)
VALUES ('$username','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "Registration Successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>

<body>

<h2>Register</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required><br><br>

<input type="email" name="email" placeholder="Email" required><br><br>

<input type="password" name="password" placeholder="Password" required><br><br>

<button type="submit" name="register">Register</button>

</form>

</body>
</html>