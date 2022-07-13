<?php

$platos = [
    [
        'id' => 1,
        'titulo' => 'Plato 1',
        'numero_comensales' => 2,
        'tipo_plato' => 'Entrada',
        'precio' => 10.5
    ],
    [
        'id' => 2,
        'titulo' => 'Plato 2',
        'numero_comensales' => 3,
        'tipo_plato' => 'Principal',
        'precio' => 15.5
    ],
    [
        'id' => 3,
        'titulo' => 'Plato 3',
        'numero_comensales' => 4,
        'tipo_plato' => 'Postre',
        'precio' => 12.5
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header><h2>HEADER</h2></header>
    <h1>Platos</h1>
    <ul>
        <?php foreach ($platos as $plato) : ?>
            <a href="detalle.php?id=<?= $plato['id']; ?> "> <?= $plato['titulo'] ?></a>
            <ul>
                <li>
                    Número de plato: <?= $plato['id'] ?> 
                </li>
                <li>
                    
                    Número de comensales: <?= $plato['numero_comensales'] ?>
                </li>
                <li>
                    Tipo de plato: <?= $plato['tipo_plato'] ?>
                </li>
                <li>
                    Precio <?= $plato['precio'] ?>
                </li>
            </ul>
            <?php endforeach; ?>
    </ul>

    <footer><h2>FOOTER</h2></footer>
</body>

</html>