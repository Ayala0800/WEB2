
<?php
require_once 'db.php';
    function showBeers(){
        require './templates/header.php';

        //obtengo las cervezas
        $cervezas = getBeers();
        require 'templates/form_altas.php';
        ?>

        <ul class="list-group">
            <?php foreach($cervezas as $cerveza){ ?>
                <li class="list-group-item">
                    <b><?php echo $cerveza->nombre?></b> | %ALC: <?php echo $cerveza->ALC?>
                </li>
            <?php } ?>
        </ul>
        <?php require './templates/footer.php';
    }
    
    function addBeer(){
        //to do: validacion

        //obtengo datos del form.
        $title = $_POST['title'];
        $ibu = $_POST['ibu'];
        $alc = $_POST['alc'];
        $style = $_POST['style'];

        //inserto datos en la db
        $id = insertBeer($title, $ibu, $alc, $style);

        if($id){
            //redirijo a la pantalla principal
            header('Location:/WEB2/intro-php/004-BDD+PHP/video03/home'); //aca va el base url
        }else{
            echo "ERROR: No se inserto la cerveza";
        }
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>