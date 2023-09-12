<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios</h1>
<?php

//Imprima por pantalla: “Hola mundo”.

    echo "Hola Mundo <br>";

//Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
    $a = "Hola Mundo <br>";

    echo $a;

//Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.

    $x = 20;
    $y = 30;
    $br = "<br>";

    echo "Suma " . $x + $y . $br ;
    echo "Resta" . $x - $y . $br ;
    echo "Multiplicacion" . $x * $y . $br ;
    echo "Division" . $x / $y . $br ;
    echo "Resto" . $x % $y . $br ;


//Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.


    $c = 20;

    $f = $c * 1.8 + 32;

    echo "20°C convertidos a Fahrenheit es " . $f . "°F" . $br;


//Implementar algoritmos que permitan:
//a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.

    $base = 18;
    $altura = 12;

    $perimetro = 2 * ($base + $altura);
    $area = 18 * 12;

    echo "El perimetro del rectangulo es de " . $perimetro . $br;
    echo "El area del rectangulo es de " . $area . $br;

//b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.

    $radio = 30;

    $diametro = $radio * 2;

    $peri = $diametro * 3.14;

    $ar = 3.14 * ($radio**2);

    echo "El perimetro del circulo es de " . $peri . $br;
    echo "El area del circulo es de " . $ar . $br;


?>




</body>
</html>