<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates/head.php' ?>

<body>

    <?php require_once 'templates/header.php' ?>

    <!-- main section -->
    <main class="container mt-5">

    <section class="noticias">

        <?php
        // incluyo el archivo donde se define el arreglo de noticias
        require_once 'db_noticias_fake.php';

        for($i=0; $i < count($noticias); $i++) {
          $noticia = $noticias[$i];
          ?>
          <div class="card">
              <img src="<?php echo $noticia->imagen ?>" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $noticia->titulo ?></h5>
                <p class="card-text"><?php  echo $noticia->contenido ?></p>
                <a href="noticia.php?id=<?php echo $i ?>" class="btn btn-outline-primary">Leer más</a>
              </div>
          </div>
          <?php
        }
        ?>
      </section>
        
    </main>
    
      
    <?php require_once 'templates/footer.php' ?>
  </body>
</html>