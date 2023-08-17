<!DOCTYPE html>
<html lang="en">

<head>
    <title>Max in 3</title>
</head>

<body>
    <form method="post">
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="number" name="n3">
        <input type="submit">
    </form>
    <?php
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];

    if ($a > $b && $a > $c) {
        echo "$a is max";
    } elseif ($b > $c && $b > $a) {
        echo "$b is max";
    } else {
        echo "$c is max";
    }
    ?>
</body>

</html>