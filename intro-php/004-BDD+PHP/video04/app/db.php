<?php
function getConnection(){
    return new PDO('mysql:host=localhost;dbname=db_cerveceria;charset=utf8','root','');
}
/**
*Obtiene de la base de datos todas la cervezas.
*/
function getBeers(){
    //PASO1.
    $db = getConnection();

    //PASO2.
    $query = $db->prepare('SELECT * FROM cervezas');
    $query->execute();

    //PASO3.
    $cervezas = $query->fetchAll(PDO::FETCH_OBJ);

    return $cervezas;
}
/**
 *Inserta nuevas cervezas en la db obtenidas del form
 */
function insertBeer($title, $ibu, $alc, $style){
    $db = getConnection(); //1.

    $query = $db->prepare('INSERT INTO cervezas (nombre, IBU, ALC, estilo_id) VALUES (?,?,?,?)');
    $query->execute([$title, $ibu, $alc, $style]);

    return $db -> lastInsertId();
}

function deleteBeer($id){
    $db = getConnection(); //1.
    $query = $db->prepare('DELETE FROM cervezas WHERE cerveza_id = ?');
    $query->execute([$id]);
}

function stockBeer($id){
    $db = getConnection(); //1.
    $query = $db->prepare('UPDATE cervezas SET disponible = 0 WHERE cervezas.cerveza_id = ?');
    $query->execute([$id]);

}