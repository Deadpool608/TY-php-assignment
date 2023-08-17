<!DOCTYPE html>
<html lang="en">

<head>
    <title>addition of 2</title>
</head>

<body>

    <form method="post">
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="submit">
    </form>

    <?php
    if(isset($_POST['n1'],$_POST['n1']))
    {

        $a = $_POST['n1'];
        $b = $_POST['n2'];
        $c = $a + $b;
        
        echo   "Result:<input type='number' value='$c' disabled name='n3'>";
    }
    ?>

</body>

</html>