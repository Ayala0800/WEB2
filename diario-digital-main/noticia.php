<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates/head.php' ?>

<body>  

    <?php require_once 'templates/header.php' ?>

    <main class="container mt-5">
      <?php 
       require_once 'db_noticias_fake.php';

       // obtengo el parametro ID que viene en la URL
       $id = $_GET['id'];
       $noticia = $noticias[$id];
      ?>

      <section class="noticia">
        <h1 class="mb-5"><?php echo $noticia->titulo ?></h1>
        <img class="noticia-image" src="<?php echo $noticia->imagen ?>" alt="...">
        <p class="lead mt-3"><?php echo $noticia->contenido ?></p>
      </section>
    </main>

    <?php require_once 'templates/footer.php' ?>
  </body>
</html>
