<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro a PHP</title>
</head>
<body>
    
    <h1>INTRO WEB 2</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, dolor!</p>

    <?php
    // abro bloque php
    $nombre = "Lucas";
    $edad = 20;

    //declaro un arreglo con tres marcas
    $autos = ['Ford','BMW','Porsche'];
    $autos[] = 'Honda'; //como si fuese un $autos.push();
    $cantidadAutos = count($autos); //como si fuere un $autos.lenght

    echo "
    <h2 class='subtitulo'>$nombre</h2>
    <p>Edad: $edad</p>
    <p> Cantidad de autos: $cantidadAutos</p>
    ";

    // imprimo el arreglo como si fuera una lista html
    echo "<h2>Autos:</h2>";
    echo"<ul>";
    for($i = 0; $i < $cantidadAutos; $i++){
        $auto = $autos[$i]; //declaro una var auto q toma el valor de cada marca del arreglo.
        echo "<li>$auto</li>";
    }
    echo "</ul>";

    /*objeto standar*/

    $coche0 = new stdClass();
    $coche0->modelo = 'F40';
    $coche0->marca = 'Ferrari';
    $coche0->color = 'Rojo';

    $coche1 = new stdClass();
    $coche1->modelo = '335i';
    $coche1->marca = 'BMW';
    $coche1->color = 'Blanco Alpina';

    $coche2 = new stdClass();
    $coche2->modelo = '911 Turbo';
    $coche2->marca = 'Porsche';
    $coche2->color = 'Silver';

    $coche3 = new stdClass();
    $coche3->modelo = 'C63s';
    $coche3->marca = 'Mercedes Benz';
    $coche3->color = 'Negro';

    $coche4 = new stdClass();
    $coche4->modelo = 'RS3';
    $coche4->marca = 'Audi';
    $coche4->color = 'Azul';

    $coches = [$coche0, $coche1, $coche2, $coche3, $coche4];

    foreach($coches as $coche){ /*imprimo $coche->modelo de $coches*/
        echo "<h1>$coche->marca</h1>
        <h2>$coche->modelo</h2>";
    }
    ?>

</body>
</html>