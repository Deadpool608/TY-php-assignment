<!DOCTYPE html>
<html lang="en">

<head>
    <title>odd even</title>
</head>

<body>

    <form method="post">
        <input type="number" name="n1">
        <input type="submit">
    </form>

    <?php
    if(isset($_POST['n1'])){

        $a = $_POST['n1'];
        if(($a%2) == 0){
            echo "number id even";
        }
        else{
            echo "number is odd";
        }
    }
    ?>

</body>

</html>