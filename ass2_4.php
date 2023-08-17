<!DOCTYPE html>
<html lang="en">

<head>
    <title>word</title>
</head>

<body>
    <form method="post">
        
           
        <textarea name="line" cols="30" rows="10"></textarea> 
        <br><br>
        <input type="radio" name="choice" value="space" />
        Spaces
    
        <input type="radio" name="choice" value="number" />
        Number of words
    
        <input type="radio" name="choice" value="vowel" />
        Vowels

        
        <input type="submit" value="Count">
    </form>

    <?php

if(isset($_POST["choice"],$_POST["line"]))
{
    $ch=$_POST["choice"];
    $l=$_POST["line"];
    
    echo "Given string is: <b>$l</b><br>";

    if($ch=="number"){
        echo "Number of Words: ".str_word_count($l,0);
    }

    if($ch=="space"){
        $pat="/ /";  
        echo "Number of Spaces: ".preg_match_all($pat,$l);
    }
    if($ch=="vowel"){
        $pat="/[aeiouAEIOU]/";  
        echo "Number of Vowels: ".preg_match_all($pat,$l);
    }
};

    ?>
</body>

</html>