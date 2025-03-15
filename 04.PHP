<?php

    class Retangulo{
        protected $altura;

        protected $largura;

        function __construct($altura,$largura){
            $this->altura = $altura;
            $this->largura = $largura;
        }

        

        //como atribuo valoe
        function __set($name, $value): void{
            $this->$name = $value;
        }

        function __get($name): mixed{
            return $this->$name;
        }

        public function getArea(): float|int{
            return  $this->altura * $this->largura;
        }

        public function getPerimetro():float {
            return 2 * ($this ->altura + $this->largura);
        }
    }
        class Ret extends Retangulo{
            function __construct(){

        }
        function CalcularCusto($valor){
            return $valor * self::getArea();//parent:: chama o pai, sel:: chama o filho
        }
    }

    //objeto
    $retangulo01 = new Retangulo(altura: 10, largura: 5);
    $retangulo01->altura = 5;
    $retangulo01->largura = 2;
    echo("altura {$retangulo01->altura} \n");
    echo("largura {$retangulo01->largura} \n");

    echo "Area {$retangulo01->getArea()} \n";
    echo "Perimetro {$retangulo01->getPerimetro()} \n";


    $retangulo02Filha = new Ret();
    $retangulo02Filha->altura=50;
?>