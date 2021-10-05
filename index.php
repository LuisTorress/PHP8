<?php
 //require_once 'persona.php';

// $Perro1 =  new Perro('Pastor Aleman', '23/02/2000', 'Macho', '2 años', 'Cafe con negro', '4 patas', '15 Kg', '1.20', 'Europeo', 'Luis');
// echo(var_export($Perro1 ));
// echo('<br>');

// $Perro1 =  new Perro('Gran Danes', '23/04/2000', 'Macho', '400 años', 'Cafe', '6 patas', '1,500 Kg', '2.20', 'Cubano', 'Luis');
// echo(var_export($Perro1));
// echo('<br>');

// $Perro1 =  new Perro('Chihuahua', '23/01/2000', 'Macho', '600 años', 'Negro', '5 patas', '135 Kg', '1.80', 'Mexicano', 'Luis');
// echo(var_export($Perro1));
// echo('<br>');

// $Generos = new GenerosDeMusica;
// echo(var_dump ($Generos));

// $Generos->Rock;
// $Generos->MostrarGenero('Rock');
// echo(var_dump ($Generos));
//////////////////////////////////////////////////////////////////////

// $trabajador1 = new Trabajo;
// $trabajador1->Nombre = 'Luis';
// $trabajador1->ApellidoPaterno = 'Prieto';
// $trabajador1->ApellidoMaterno = 'Torres';
// $trabajador1->Telefono = 6531233212;
// $trabajador1->HoraEntrada = '8:00 AM';
// $trabajador1->HoraSalida = '6:00 PM';
// $trabajador1->PuestoTrabajo = 'Programador';
// $trabajador1->Salario = 8000.00;
// $trabajador1->DatosTrabajo();

///////////////////////////////////////////////////////

// encapsulamientos

// $persona1 = new Trabajo;
// $persona1->saludar();

// $persona1 = new Persona;
// $persona1->setter('hola ya cambie el valor jeje');
// echo $persona1->getter();

////////////////////////////////////////////////////////


// require_once 'models/user.php';
// require_once 'controllers/userControllers.php';

// use models\user;
// // use controllers\userController;

// spl_autoload_register(function ($clase){
//     //La variable $clase tiene el valor de models\user
//     require_once str_replace('\\','/', $clase) . 'php';
//     //Ya una vez modificada ahora es asi models/user.php
// });
// $user1 = new user;
// $user1->saludo();
// echo '<br>';
// // $controller1 = new userController;
// // $controller1->saludo();

///////////////////////////////////////////////////////

// require_once 'Persona.php';
// $persona1 = new Persona;
// $persona1->saludar();

// $nombre::$nombre;
// Persona::saludar();