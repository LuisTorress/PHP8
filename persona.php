<?php 

//////////////////////////////////// EXAMEN DE PRUEBA ///////////////////////////////////////////
class persona
{
    public $nombre = 'Luis';
    public $altura = '1.83';
    public $peso = '63kg';

function CalcularPeso($nombre, $altura, $peso)
{
    $IMC = ($peso/($altura*$altura));
    if ($IMC<=18.5){
        echo ($nombre. 'Su IMC corresponde a bajo peso');

    }elseif ($IMC>=18.5 && $IMC<=24.9){
        echo ($nombre. ' Su IMC corresponde a peso saludable');

    }elseif ($IMC>=25.0 && $IMC<=29.9){
        echo ($nombre. ' Su IMC corresponde a sobrepeso');

    }elseif ($IMC>=30.0){
        echo ($nombre. ' Su IMC corresponde a obesidad');
    }
    return $IMC;
    
}
}










////////////////////////////////////////////////////////////////////////////////////////////////
//  class Persona
//  {
//      public static $nombre = 'Luis';
//      public static function saludar()
//      {
//          echo 'saludo';
//      }
//  }