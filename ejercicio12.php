<?php
    $array = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4
    ];

    foreach ($array as $key => &$valor) {
        $valor = $valor * 2;
        echo $key;
        // echo $valor.PHP_EOL;
        echo "<br>";
}
// print_r($array);
?>
<?php
// $array = [1, 2, 3, 4];
// foreach ($array as $key => $valor) {
//     echo $key;
//     $valor = $valor * 2;
// }
// print_r($array);
?>

