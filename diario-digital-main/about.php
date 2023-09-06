<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates/head.php' ?>

<body>  
    <?php require_once 'templates/header.php' ?>

    <?php 
    require_once 'db_devs_fake.php'; 

    // obtengo el arreglo de developers
    $developers = getDevelopers();
    ?>

    <main class="container mt-5">
        <h1>About</h1>

        <div class="row">
            <div class="col">
                <div class="list-group">
                    <?php foreach ($developers as $developer) { ?>
                    <a class="list-group-item list-group-item-action" href="about.php?dev=<?php echo $developer->id?>">
                        <?php echo $developer->name?>
                    </a>
                    <?php }?>
                </div>
            </div>

            <div class="col">
                <?php
                    // se fija si existe el parametro y en ese caso lo busca e imprime
                    if (!empty($_GET['dev'])) {
                        $dev = $_GET['dev'];
                        $developer = getDeveloperById($dev);
                ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $developer->name ?></h5>
                            <h5 class="card-subtitle"><?php echo $developer->role ?></h5>
                            <p><?php echo $developer->email ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </main>

    <?php require_once 'templates/footer.php' ?>
  </body>
</html>