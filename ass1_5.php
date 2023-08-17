<!DOCTYPE html>
<html>
<head>
<title>Series of Numbers</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="number" placeholder="Enter a number">
<input type="submit" value="Print Series">
</form>

<?php
if (isset($_POST['number'])) {
$number = $_POST['number'];

for ($i = 1; $i <= $number; $i++) {
echo "$i ";
}
}
?>
</body>
</html>
