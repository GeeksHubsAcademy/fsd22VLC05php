<?php

    class PoligonoRegular
    {
        const VALOR_IVA = 0.21;
        const NOMBRE = "DANI";

        public int $lado = 4;
        protected float $medida = 2.5;

        public function getLado()
        {
            return $this->lado;
        }

        public function setLado($nuevoLado)
        {
            $this->lado = $nuevoLado;
        }

        public function getMedida()
        {
            return $this->medida;
        }

        public function setMedida($nuevaMedida)
        {
            $this->medida = $nuevaMedida;
        }

        public function toArray()
        {
            $nuevoArray = [
                'lado' => $this->lado,
                'medida' => $this->medida        
            ];

            return $nuevoArray;
        }

        public function perimetro()
        {
            $perimetro = $this->lado * $this->medida;

            return $perimetro;
        }
    }

    $poligonoRegular1 = new PoligonoRegular();

    var_dump($poligonoRegular1->lado);
    var_dump($poligonoRegular1->getMedida());

    // $poligonoRegular2 = new PoligonoRegular();
    // $poligonoRegular3 = new PoligonoRegular();

    // var_dump($poligonoRegular1);

    // var_dump($poligonoRegular1->toArray());
    // var_dump($poligonoRegular2->toArray());
    // var_dump($poligonoRegular3->toArray());

    // $perimetro = $poligonoRegular1->lado * $poligonoRegular1->medida;
    // var_dump($perimetro);

    // var_dump($poligonoRegular1->perimetro());


    // $poligonoRegular1->setMedida(5555);

    // var_dump($poligonoRegular1->getMedida());

    // var_dump($poligonoRegular1->lado);

    // $poligonoRegular1->lado = 1111;

    // var_dump($poligonoRegular1->lado);

    // var_dump($poligonoRegular1->getLado());

    // $nuevoLado = 100;

    // $poligonoRegular1->setLado($nuevoLado);

    // var_dump($poligonoRegular1->getLado());












    


?>