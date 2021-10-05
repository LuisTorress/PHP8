<?php






/*
$variable1=10;
$variable2=90;
echo ($variable1 > $variable2 ? 'Hola estoy dentro de este ? ' : 'Hola estoy dentro :');
*/




////////////////// Dias ////////////////
/*
$dia = 1;

switch ($dia) {
    case 1;
        echo ('Dia Lunes');
        break;
    case 2;
        echo ('Dia Martes');
        break;
    case 3;
        echo ('Dia Miercoles');
        break;
    case 4;
        echo ('Dia Jueves');
        break;
    case 5;
        echo ('Dia Viernes');
        break;
    case 6;
        echo ('Dia Sabado');
        break;
    case 7;
        echo ('Dia Domingo');
        
        break;
}
*/
//$var1 = 90;
//$var2 = 70;

/////////// Validad Edad ////////////
/*
$Edad = 100;

if($Edad >= 18 && $Edad <= 100){
    echo('Eres mayor de edad');
} elseif ($Edad > 0 && $Edad <18); {
    echo('Eres menor de edad');
} else {
    echo('Edad erronea');
}
*/

/////////////////Operadores aritméticos//////////////


// //suma + 
// $respuesta = $var1 + $var2;
// echo ('la suma de ' . $var1 . ' + ' . $var2 . ' dio como resultado: ' . $respuesta . '<br>');
// //resta
// $respuesta = $var1 - $var2;
// echo ('la resta de ' . $var1 . ' - ' . $var2 . ' dio como resultado: ' . $respuesta . '<br>');
// //multiplicacion
// $respuesta = $var1 * $var2;
// echo ('la multiplicacion de ' . $var1 . ' * ' . $var2 . ' dio como resultado: ' . $respuesta . '<br>');
// //dividir
// $respuesta = $var1 / $var2;
// echo ('la divicion de ' . $var1 . ' / ' . $var2 . ' dio como resultado: ' . $respuesta . '<br>');

// //la negacion
// $cantidad = 400;
// echo ('la negacion de ' . $cantidad . ' es: ' . -$cantidad);


///////////////Operadores de comparación/////////////////
// < menor que
// echo (var_dump($var1 < $var2) . '<br>');
// // > mayor que
// echo (var_dump($var1 > $var2) . '<br>');
// // >= mayor igual que
// echo (var_dump(100 >= 100) . '<br>');
// // <= menor igual que
// echo (var_dump(100 <= 100) . '<br>');
// // == exactamente iguanas
// echo (var_dump(100 == 100) . '<br>');
// // != diferente que
// echo (var_dump(10 != 100) . '<br>');


///////////////////Operadores lógicos//////////////

// // and &&
// echo (var_dump($var1 > 10 && $var2 == 70));
// // or ||
// echo (var_dump($var1 > 10 || $var2 == 72));
// // not !
// $obcion1 = true;
// echo(var_dump(!$obcion1));


///////////////// Estructuras condicionales /////////////
// $dia = 8;
// if ($dia == 1) {
//     echo ('dia lunes');
// } elseif ($dia == 2) {
//     echo ('dia martes');
// } elseif ($dia == 3) {
//     echo ('dia miercoles');
// } elseif ($dia == 4) {
//     echo ('dia jueves');
// } elseif ($dia == 5) {
//     echo ('dia viernes');
// } elseif ($dia == 6) {
//     echo ('dia sabado');
// } elseif ($dia == 7) {
//     echo ('dia domingo');
// } else {
//     echo ('dato erroneo');
// }

////////////////////////
/*
$lenguajes = [
'php',
'html',
'css3',
'golang',
'lumen',
'flutter',
'dart',
'ruby',
'HUGO',
'react',
'Angular'
];

$Contados = count($lenguajes);
$i=0;
while ($i < $Contados) {
    echo($i.".-"."$lenguajes[$i]"."<br>");
    $i++;
}
/*


// echo(var_dump($lenguajes));
//echo($lenguajes[11]);

/*
$i = 0;

while($i <= 10){
    echo('Hola '.$i.'<br>');
    $i++;
}

for($var=0; $var <= 10; $var++) {
    echo('hola for '. $var . '<br>');
}
*/

////////////////////////////////////////////

$usuarios = [
    [
        'Nombre' => 'Luis',
        'Edad' => '21',
        'Sexo' => 'Masculino'
    ],
    [
        'Nombre' => 'Karla',
        'Edad' => '21',
        'Sexo' => 'Femenino'
    ],
    [
        'Nombre' => 'Yamiley',
        'Edad' => '21',
        'Sexo' => 'Femenino'
    ],
    [
        'Nombre' => 'Charlotte',
        'Edad' => '21',
        'Sexo' => 'Femenino'
    ],
    [
        'Nombre' => 'Angel',
        'Edad' => '20',
        'Sexo' => 'Masculino'
    ],
    [
        'Nombre' => 'Jorge',
        'Edad' => '21',
        'Sexo' => 'Indefinido'
    ]
];

///////////////////////////////////////////////////////////////
//echo($usuarios[1]['Nombre']);

//for($i=0; $i< count($usuarios); $i++) {
//    echo($usuarios[$i]['Nombre'] .'<br>');
//}

//foreach($usuarios as $usuario){
//    echo($usuario['Nombre'] . '<br>');
//}

//////////////////////////////////////////////////////////////////

//echo('El dato random es: '. rand(1,500));
//$nombre = ['Luis', 'Karla'];

//function saludo($nombre, $edad){
 //   echo('Hola '.$nombre. ' estas en la funcion saludo y tu edad es de '. $edad . '<br>');
//}

//saludo('Luis',21);
//saludo('Karla',21);


//function calcular($numero)
//{
//    return $numero * $numero;
//}

// Manera numero 1
//$resultado = calcular(10);
//echo($resultado);

// Manera numero 2
//echo(calcular(10));

//function CalcularEdad($edad)
//{
    //if ($edad >=18 && $edad <=100){
        //return 'eres mayor de edad';
    //} elseif ($edad > 0 && $edad <18) {
        //return 'eres menor de edad y no puedes entrar al boobies';
    //} else {
        //return 'edad erronea';
    //}
//}

//echo(CalcularEdad(22). '<br>');
//echo(CalcularEdad(-21). '<br>');
//echo(CalcularEdad(220). '<br>');

////////////////////////Programacion Orientada a objetos////////////////////////////////////////////

class Persona
{
    public $edad;
    public $nombre;
    public $colorDeOjos;
    public $colorPiel;
    public $nacionalidad;
    public $colorPelol;
    public $genero;
    public $apellidoPaterno;

    private $bandera;
    private $cargando;

    private function validarNacionalidad(){

    }
    
}

class Alumnos
{
    public $nombre = 'Karla';
    public $Edad = '21';
    public $cumpleaños = '16 de Junio';
    public $altura = '1.56';
    public $genero = 'Femenino';
    public $colorDePelo = "Cafe";
    public $colorDePiel = 'Blanca';
    public $escuela = 'Sepa que cosa del sol';
    public $grupo = 'Si no se el nombre de la escuela menos el grupo';
    public $nacionalidad = 'Mexicana';

    private $domicilio = 'Se llegar pero se me olvida el nombre';
    private $celular = 'No tiene';

    private function validarNombre($nombre){
        
    }

    private function validarGrupo(){
        
    }
}

?>
