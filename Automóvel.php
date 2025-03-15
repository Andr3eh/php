<?php 

class Automovel{


    //public, private, protected
    //Propriedade
    public $qtdeRoda;
    private $motor;
    public $renavam; 
    public $cor; 
    private $qtdePorta;
    private $modelo;
    public $fabricante;
    public $anoFab;

    // metodos
    public function acelerar($vel){
        //O parametro voce declara, mas não sabe onde vai ser usado
        //Por exemplo usar um parametre ($Boa Noite) toda variavel que for entrando nessa função recebera esse parametro. Exemp: "BoaNoite, Claudio"
        echo  $vel ."KH";
    }


    //---------------Porta------------------
    
    //Modificadores
        //atribui
    public function set_qtdePorta($arg){
        $this->qtdePorta = $arg ;
    }

    //exibir
    public function get_qtdePorta(){
        return $this->qtdePorta;
    }
    //---------FIM-DO-PORTA---------------

    //---------------MOTOR------------------

    public function set_Motor($arg){
        $this->motor = $arg;
    }

    public function get_Motor(){
        return $this->motor;
    }
    //--------FIM-DO-MOTOR----------------

    //--------------Modelo------------------
    public function set_Modelo($arg){
        $this->modelo = $arg;
    }

    public function get_Modelo(){
        return $this->modelo;
    }
    //-----------FIM-DO-MODELO-------------

    //-------------MODELO GENERICO------------
              //magicos
    public function _set($name,$value){
        $this->$name = $value ;
    }

    public function _get($name){
        return $this->$name;
    }
    //-------------FIM-DO-GENERICO-------------
}

//-------$auto01----------------
//criar um objeto
$auto01 = new Automovel();
$auto02 = new Automovel();

//$auto01 ->modelo = " Astra ";
$auto01 ->set_modelo('Astra');
//$auto01 ->motor = 2.3;
$auto01->set_motor(2.0);
$auto01 ->qtdeRoda = 5;
$auto01 ->renavam = "123455";
$auto01 -> cor = "preto";
$auto01 -> fabricante = "chev";
$auto01 -> anoFab = "1999";
//$auto01 -> qtdePorta = 4;
$auto01->set_qtdePorta(3);
//--------------------------------

//---------$auto02----------------
$auto02->set_Modelo('Gol GTS');

//---------------------------------


//----------EXIBINDO DADOS----------------
//echo "Modelo : " . $auto01->modelo;
echo "Modelo : " .$auto01->get_modelo();
echo "<br>";
echo "Modelo :" .$auto01->get_Motor();
//echo "Motor : " . $auto01->motor;
echo "<br>";
echo "Porta :" .$auto01->get_qtdePorta();
echo "<br>";
echo $auto01->acelerar(180);
echo "<hr>";
echo "Modelo : " . $auto02->get_modelo() ;
echo "<br>";
echo $auto02->acelerar(150);
//-------------------------------------------

?>