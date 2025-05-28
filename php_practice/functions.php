<?php
    $randomVal = rand(-100, 100);

    if($randomVal > 0){
        $description = "positive";
    }
    else if($randomVal < 0){
        $description = "negative";
    }
    else{
        $description = "zero";
    }

    echo "the random value of today is: ".$description;