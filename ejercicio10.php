<?php

$array = [
    "nombre" => "Juan",
    "apellido" => "Garcia",
    "hobbies" => [
        "deportes" => [
            "petanca",
            "balonmano",
        ]
    ]
];

// var_dump($array['hobbies']['deportes'][0]);

echo $array['hobbies']['deportes'][1];

?>
