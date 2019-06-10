<?php
$a = 100;
for ($b=1;$b<=$a;$b++){
    if ($b%3 == 0 && $b%5 ==0) {
        echo "FIZZBUZZ <br />";
    }
    elseif ($b%3 == 0){
        echo "FIZZ <br />" ;
    }
    elseif ($b%5 == 0){
        echo "BUZZ<br />" ;
    }
    else {
        echo $b."<br />";
    }
}














?>