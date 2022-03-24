<?php
    declare(strict_types=1);


    class Coche {

        private ?int $ruedas;
        private ?string $marca;
        private ?string $modelo;

        function __construct(?int $ruedas, ?string $marca, ?string $modelo)
        {
            $this->ruedas = $ruedas;
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        function dataToArray(){
            $arrayReturn = [
                "modelo" => $this->modelo,
                "marca" => $this->marca,
                "ruedas" => $this->ruedas
            ];

            return $arrayReturn;

        }

        function setMarca(?string $marca){
            $this->marca = $marca;
        }

        function getMarca(){
            return $this->marca;
        }

        function setModelo(?string $modelo){
            $this->modelo = $modelo;
        }

        function getModelo(){
            return $this->modelo;
        }

        function setModeloMarca(?string $modelo, ?string $marca){
            $this->modelo = $modelo;
            $this->marca = $marca;
        }


    };


    $coche1 = new Coche(3,"BMW","Compact");

    $coche1->setMarca("Orbea");

    var_dump($coche1->dataToArray()["marca"]);

?>