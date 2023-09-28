<!DOCTYPE html>
<html lang="es">
<?php require './templates/head.php';?>
<body>
    <?php
    require_once 'db_coches.php';
    include './templates/header-nav.php';

    function showHome(){ //muestra todas las marcas.
        $coches = getCoches();
        ?>

        <main class="container mt-5">
            <div class="list-group">
                <?php foreach ($coches as $coche){?>
                <a class="list-group-item list-group-item-action" href="coche/<?php echo $coche->id?>"><?php echo $coche->marca?></a>
                <?php }?>
            </div>
        </main>
        <?php
    }?>

    <?php
    function showCocheById($id){
        $coche = getCochesById($id);
        ?>
        <div class="card" style="width: 18rem;">
            <h1 class="card-title"><?php echo $coche->marca?></h1>
            <img src="<?php echo $coche->foto ?>" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title"><?php echo $coche->modelo?></h4>
                <h5 class="card-subtitle"><?php echo $coche->potencia?></h5>
                <p><?php echo $coche->color?></p>
            </div>
        </div>
        <?php
    }?>

</body>
</html>