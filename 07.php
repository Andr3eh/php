<?php 
include_once("05.php");

class CirFilho extends Circle{

    protected $radius = 5;

    function __construct(){}
   function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new CirFilho();
echo "perimetro {$circle->getCircumference()} \n";
echo $circle->getArea();



?>