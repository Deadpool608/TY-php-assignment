<!DOCTYPE html>
<html lang="en">
<head>
    <title>check number</title>
</head>
<body>
    <?php
    function num($a){
        if($a==0)
        {
            echo"number is zero"; echo"<br/>";
        }
        elseif($a<0)
        {
            echo"number is negetive"; echo"<br/>";
        }
        else
        {
             echo"number is positive"; echo"<br/>";
        }
    }
    num(10);
    num(-2);
    num(0);
   ?>
</body>
</html>