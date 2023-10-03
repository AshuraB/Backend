<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
print "<p>Mostrar los números del 1 al 100.</p>";

for ($i=1; $i <=100; $i++) { 
    print "<p>$i</p>\n";
}

print "<p>Mostrar los números del 100 al 1.</p>";

for ($i=100; $i >=1; $i--) { 
    print "<p>$i</p>\n";
}

print "<p>Mostrar los números pares del 1 al 100.</p>";

for ($i=1; $i <= 100; $i++) { 
    if ($i%2==0) {
        print "<p>$i</p>\n";
    }
}

print "<p>Mostrar los números impares del 1 al 100.</p>";

for ($i=1; $i <= 100; $i++) { 
    if ($i%2==1) {
        print "<p>$i</p>\n";
    }
}

print "<p>Mostrar la suma de los números de 1 a 20.</p>";

$result = 0;

for ($i=1; $i <= 20; $i++) { 
    $result = $result + $i;
}
print $result;

print "<p>Mostrar la suma de números pares de 1 a 20.</p>";

$result = 0;

for ($i=1; $i <= 20; $i++) { 
    if ($i%2==0) {
        $result = $result + $i;
    }
}
print $result;




?>
</body>

</html>