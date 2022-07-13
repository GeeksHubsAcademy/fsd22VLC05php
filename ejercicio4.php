<?php
$cadena = 'Esto es una cadena de texto';
echo $cadena;
echo "<br>";
echo 'Esto es una cadena sencilla';
echo "<br>";
echo 'También se pueden incluir nuevas líneas en
un string de esta forma, ya que es
correcto hacerlo así';
echo "<br>";
// Resultado: Arnold una vez dijo: "I'll be back"
echo 'Arnold una vez dijo: "I\'ll be back"';
echo "<br>";
$str = <<<EOD
Ejemplo de una cadena
expandida en varias líneas
empleando la sintaxis
heredoc.
EOD;

echo $str;

?>