<!DOCTYPE html>
<html lang="en">

<head>
    <title>Random Num</title>
</head>

<body>
    <form method="post">
        <input placeholder="num1" type="text" name="n1">
        <input placeholder="num2" type="text" name="n2">
        <input type="submit" value="Generate">
    </form>

    <?php
    $a = $_POST["n1"];
    $b = $_POST["n2"];

    if (isset($_POST["n1"], $_POST["n2"])) {

        $randomNumbers = [];
        for ($i = 0; $i < 10; $i++) {  
            $randomNumbers[] = rand($a, $b);
        }

        $num1=0;
        $num2=0;
        foreach($randomNumbers as $randomNumber){
            if($randomNumber==$a){
                $num1++;
            }
            if($randomNumber==$b){
                $num2++;
            }
        }
       
        $min=min($randomNumbers);
        $max=max($randomNumbers);

        for($j=0;$j<10;$j++)
        {
            echo "$randomNumbers[$j] <br>";
        }
        echo "<br>";
        echo "$a occur $num1 times <br>";
        echo "$b occur $num2 times <br>";
        echo "max num is $max <br>";
        echo "min num is $min <br>";
       
    }
    ?>
</body>

</html>
