<?php 
include("08.php");

class Triangulo extends Shape{

    
    //const MSG = "Faço parte de uma variavel"; 

        function __construct($a, $b){
            $this->base = $b;
            $this->altura = $a;
        }

    function getCalArea(){
        return 0.5 * ($this->base * $this->altura) ;0
        
    }
}

$obTria = new Triangulo(2,2);
echo $obTria->getCalArea();
//echo Triangulo::MSG; Dessa maneira estou chamando a Classe, e pedindo para ela apresentar o MSG, no caso a const.

//$obTria = new Triangulo(), aqui esotu pedindo para ele entrar dentro da classe e procurar algo que irei determinar
//no caso getCalArea.

?>