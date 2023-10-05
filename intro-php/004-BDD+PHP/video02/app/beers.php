
<?php
require_once 'db.php';
    function showBeers(){
        require './templates/header.php';

        //obtengo las cervezas
        $cervezas = getBeers();?>

        <ul class="list-group">
            <?php foreach($cervezas as $cerveza){ ?>
                <li class="list-group-item">
                    <b><?php echo $cerveza->nombre?></b> | %ALC: <?php echo $cerveza->ALC?>
                </li>
            <?php } ?>
        </ul>
        <?php require './templates/footer.php';
    } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>