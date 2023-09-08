<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h1>coche.php</h1>
        <?php

        require_once 'db.php';

        //por ejemplo me llaman con el parametro GET ?id=0
        //obtengo el parametro ID q viene en la URL
        $id = $_GET['id'];

        $autox = $coches[$id]; //va a mostrar el auto segun el id q venga en la URL
        ?>

        <h2><?php echo $autox->marca?>  <?php echo $autox->modelo?></h2>
        <h2>Color: <?php echo $autox->color?></h2>
        <h2>Potencia: <?php echo $autox->potencia?></h2>
        <img src="<?php echo $autox->foto?>" class="card-img" alt="">
    </main>

</body>
</html>