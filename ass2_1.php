<!DOCTYPE html>
<html>
<head>
<title>Student Form</title>
</head>
<body>
<h1>Student Registration Form</h1>

<form action="" method="post">
<input type="text" name="name" placeholder="Enter your name">
<br>
<input type="email" name="email" placeholder="Enter your email">
<br>
<input type="password" name="password" placeholder="Enter your password">
<br>
<input type="submit" value="Register">
</form>

<?php
if (isset($_POST['name'],$_POST['email'],$_POST['password'])) 
{

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($name)) {
$nameErr = "Name is required";
} else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
$nameErr = "Only letters and whitespace are allowed";
}


if (empty($email)) {
$emailErr = "Email is required";
} else if (!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/",$email)) {
$emailErr = "Invalid email format";
}


if (empty($password)) {
$passwordErr = "Password is required";
} else if (strlen($password) < 8) {
$passwordErr = "Password must be at least 8 characters long";
}


if (empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
echo "<h2>Your input:</h2>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Password: $password</p>";
}
}
?>
</body>
</html>
