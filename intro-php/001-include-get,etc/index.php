<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Intro a PHP</title>
</head>
<body>
    <header>
        <nav>
            <button><a href="db.php">todos los coches</a></button>
            <button><a href="coche.php">coche disponible</a></button>
        </nav>
    </header>
    <h1>INTRO WEB 2</h1>

    <section class="autos">
        <?php
        /*incluyo el archivo donde se define el arreglo de obj. de autos*/
        require_once 'db.php';

        for($i=0;$i< count($coches);$i++){
            $coche = $coches[$i];
        
            ?>
            <div class="card">
                <img src="<?php echo $coche->foto?>" class="card-img" alt="">
                <div class="card-body">
                    <h2 class="card-tittle"><?php echo $coche->marca?>  <?php echo $coche->modelo?></h2>
                    <a href="coche.php?id=<?php echo $i?>">ver más</a> <!--indico el parametro, en este caso $i-->
                </div>
            </div>
            <?php
        }
        ?>
    </section>
</body>
</html>