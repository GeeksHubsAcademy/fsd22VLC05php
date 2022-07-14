<?php
    $a = 1; /* ámbito global */

    define('NOMBRE', 'dani');

    function test()
    {
        $b = 3;

        echo $b;

        echo NOMBRE;
        // echo $a;
        /* referencia a una variable del ámbito local */
    }

    // echo $b;
    test();
?>

<?php
    // $a = 1;
    // $b = 2;

    // function suma()
    // {
    //     global $a, $b;
    //     $c = $a + $b;

    //     echo $c;
    // }

    // suma();

    // // echo $b;
?>