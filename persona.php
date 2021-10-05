<?php 
/////////////////// Actividad //////////////////////////////////

// class GenerosDeMusica{
//     public $Rock;
//     public $Pop;
//     Public $Metal;
//     public $Rap;
//     public $Dance;
//     public $Synth;
//     public $CityPop;

//     public function MostrarGenero($Rock)
//     {
//         echo('El genero nombrado es '.$this-> Rock);
//     }
// }


////////// Ejemplo de clase /////////////////////////////////////
/*
class Persona{
    public $Nombre;
    public $ApellidoPaterno;
    public $ApellidoMaterno;
    public $Sexo;
    public $Telefono;
*/
   
  // public function saludar($Nombre)
    //{
        //echo('Hola mi nombre es ' .$this-> Nombre);
    //}
//}


////////////// Manera real ///////////////////

// class Perro{
//     public $Raza;
//     public $FechaDeNacimiento;
//     public $Genero;
//     public $Edad;
//     public $ColorDePelo;
//     public $NumeroDePatas;
//     public $Peso;
//     public $Tamaño;
//     public $Nacionalidad;
//     public $NombreDelDueño;

//     public function __construct($Raza, $FechaDeNacimiento, $Genero, $Edad, $ColorDePelo, $NumeroDePatas, $Peso, $Tamaño, $Nacionalidad, $NombreDelDueño)
//     {
//         $this->Raza = $Raza;
//         $this->FechaDeNacimiento = $FechaDeNacimiento;
//         $this->Genero = $Genero;
//         $this->Edad = $Edad;
//         $this->ColorDePelo = $ColorDePelo;
//         $this->NumeroDePatas = $NumeroDePatas;
//         $this->Peso = $Peso;
//         $this->Tamaño = $Tamaño;
//         $this->Nacionalidad = $Nacionalidad;
//         $this->NombreDelDueño = $NombreDelDueño;


//     }
// }

//public function __construct($Nombre, $ApellidoMaterno, $ApellidoPaterno, $telefono,
///////////////////////////////////////////////////////////////////////////////////////////////////////////

// class Persona
// {
//     public $Nombre;
//     public $Telefono;
//     public $ApellidoPaterno;
//     public $ApellidoMaterno;
    
//     public function saludar()
//     {
//         echo 'Saludar';
//     }

// }

// class Trabajo extends Persona
// {
//     public $PuestoTrabajo;
//     public $HoraEntrada;
//     public $HoraSalida;
//     public $Salario;

//     public function DatosTrabajo()
//     {
//         echo '<b> El nombre es: </b><br>' .$this->Nombre . '<b><br> El apellido paterno es: </b><br> ' .$this->ApellidoPaterno. '<b><br> el apellido materno es: </b><br> ' .$this->ApellidoMaterno. '<b><br> el telefono es: </b><br> ' .$this->Telefono. '<b><br> La hora de entrada es </b><br>' .$this->HoraEntrada. '<b><br> La hora de salida es </b><br>' .$this->HoraSalida. '<b><br> El puesto de trabajo es: </b><br>' . $this->PuestoTrabajo. '<b><br> El salario es: </b><br>' .$this->Salario;
//     }
// }

/////////////////////////////////////////////////////// ENCAPSULAMIENTO /////////////////////////////////

// class Persona
// {
//     public $publica = 'Hola soy publica';
//     protected $protegida = 'Hola estoy protegida';
//     private $privada = 'Hola soy privada';

//     public function getter()
//     {
//         echo $this->privada;
//     }

//     public function setter($valor)
//     {
//         $this->privada = $valor;
//     }
// }


// class Trabajo extends Persona
// {

//     public function saludar()
//     {
//         echo $this->protegida;
//     }
// }

// class Persona
// {
//     public static $nombre = 'Luis';
//     public static function saludar()
//     {
//         echo 'saludo';
//     }
// }