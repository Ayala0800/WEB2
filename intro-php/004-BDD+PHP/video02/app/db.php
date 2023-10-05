<?php

/**
*Obtiene de la base de datos todas la cervezas.
*/
function getBeers(){
    //PASO1.
    $db = new PDO('mysql:host=localhost;dbname=db_cerveceria;charset=utf8','root','');

    //PASO2.
    $query = $db->prepare('SELECT * FROM cervezas');
    $query->execute();

    //PASO3.
    $cervezas = $query->fetchAll(PDO::FETCH_OBJ);

    return $cervezas;
}