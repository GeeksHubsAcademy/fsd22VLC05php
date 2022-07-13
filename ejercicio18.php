<?php
    function hacer_café($tipo = "capuchino")
    {
        return "Hacer una taza de $tipo.\n";
    }
    
    echo hacer_café();
    echo hacer_café(null);
    echo hacer_café("espresso");
?>