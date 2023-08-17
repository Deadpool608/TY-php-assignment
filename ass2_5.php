<!DOCTYPE html>
<html lang="en">

<head>
    <title>date</title>
</head>

<body>
    <form method="post">
        
           
    <label for="date">Date:</label>
<input type="date" name="date" id="date">

                <input type="radio"  name="choice" value="d/m/y" />
                d/m/y
           
                <input type="radio" name="choice" value="d-m-y" />
                d-m-y
           
                <input type="radio" name="choice" value="y-d-m" />
                y-d-m

        <input type="submit" value="serch">
    </form>

    <?php

if(isset($_POST["choice"],$_POST["date"]))
{
    $ch=$_POST["choice"];
    $d=$_POST["date"];
    
   
    if($ch=="d/m/y"){
        echo date('d/m/y', strtotime($d));
    }

    if($ch=="d-m-y"){
        echo date('d-m-y', strtotime($d));
    }

    if($ch=="y-d-m"){
        echo date('y-d-m', strtotime($d));
    }

    
};

    ?>
</body>

</html>