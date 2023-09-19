<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicios</h1>
</body>
<?php

//Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
//mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
//numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.


$br = "<br>";

$numero1 = 9;
$numero2 = 10;

if ($numero1 > $numero2) {
    echo "Suma = " . $numero1 + $numero2 . $br;
    echo "Resta = " . $numero1 - $numero2 . $br;
} elseif ($numero2 == $numero1) {
    echo "Los números ingresados son iguales";
} else {
    echo "Multiplicación = " . $numero2 * $numero1 . $br; 
    echo "División = " . $numero2 / $numero1 . $br; 
    echo "Resto = " . $numero2 % $numero1 . $br;
}

?>

</html>