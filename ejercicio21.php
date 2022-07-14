<?php
declare(strict_types=1);

function sum(float $a, float $b) {

    if(is_int($a)) {
        echo 'is INT';
    } else {
        // return 'El numer';
    }

    return $a + $b;
}


$a = [[3,4,5],2,3];

// echo $a[0];

// print_r($a)

var_dump(sum(1, 2));

var_dump(sum(1.5, 2.5));
?>