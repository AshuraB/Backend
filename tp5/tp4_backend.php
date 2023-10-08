<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    print "<p>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</p>\n";

    $pares = ['2', '4', '6', '8', '10'];

    foreach ($pares as $valor) {
        print "<p>$valor </p>\n";
    };



    print "<p>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r().</p>\n";

    $datos = ['Pedro', 'Ana', '34', '1'];
    print_r($datos);

    print "<p>Crear un array asociativo.</p>\n";

    $persona = [
        "Nombre" => 'Pedro',
        "Apellido" => 'Torres',
        "Direccion" => 'Av. Mayor 3703',
        "Telefono" =>  '1122334455'
    ];

    print_r($persona);

    print "<p>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</p>\n";

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
    $i = 0;
    foreach ($ciudades as $valor) {
        print "<p>La cuidad con el indice $i tiene el nombre $valor</p>\n";
        $i++;
    };

    print "<p>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. Ejemplo: El índice de Madrid es MD.</p>\n";

    $ciudades2 = [
        "MD" => 'Madrid',
        "BCL" => 'Barcelona',
        "LD" => 'Londres',
        "NY" => 'New York',
        "LA" => 'Los Angeles',
        "CCG" => 'Chicago'
    ];
    foreach ($ciudades2 as $valor => $x) {
        print "<p> El indice de $x es $valor</p>\n";
    };
    ?>
</body>

</html>