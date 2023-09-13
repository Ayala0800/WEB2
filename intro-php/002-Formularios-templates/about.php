<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>About</title>
</head>
<body>
    <?php require './templates/header.php';
    require_once 'db_coches.php';

    //obtengo el arreglo de coches de la db
    $coches = getCoches();
    ?>

    <main class="container">
        <h1>Página About</h1>

        <div class="row">
            <div class="col">
                <div class="list-group">
                    <?php foreach ($coches as $coche){?>
                    <a class="list-group-item list-group-item-action" href="about.php?coche=<?php echo $coche->id?>">
                        <?php echo $coche->marca?>
                    </a>
                    <?php }?>
                </div>
            </div>

            <div class="col">
                <?php
                    // se fija si existe el parametro y en ese caso lo busca e imprime
                    if(!empty($_GET['coche'])){
                        $id_coche = $_GET['coche'];
                        $auto = getCochesById($id_coche);?>

                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $auto->foto?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $auto->marca ?></h4>
                                <h5 class="card-subtitle"><?php echo $auto->modelo ?></h5>
                                <p><?php echo $auto->potencia?></p>
                            </div>
                        </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>