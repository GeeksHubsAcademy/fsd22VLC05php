<?php 

    class Vehiculo
    {
        public string $motor;
        public int $numero_ruedas;
        public string $marca;

        function __construct(
            $miMotor,
            $miNumeroRuedas,
            $miMarca
        ) {
            $this->motor = $miMotor;
            $this->numero_ruedas = $miNumeroRuedas;
            $this->marca = $miMarca;
        }
    }

    $vehiculo1 = new Vehiculo('Diesel', 4, 'Ford');
    $vehiculo2 = new Vehiculo('Gasolina', 3, 'Seat');
    
    var_dump($vehiculo1);
    var_dump($vehiculo2);
