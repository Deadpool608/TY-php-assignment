<?php
    if($_SERVER["REQUEST_METHOD"]=="GET")
      {

        $l=$_GET['line'];
        $w=$_GET['word'];

        $occur=0;
        $counts=explode(" ",$l);
        
        foreach($counts as $w){
            if($w==$_GET['word']){
                $occur++;
            }
        }
 
        echo "$w occurs $occur time in <br> $l";
      }
