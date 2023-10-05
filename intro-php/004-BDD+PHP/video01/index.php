<?php
/*
 * 1- Abrir una conexión con la base de datos
 * 2- Enviar consultas y obtener resultados
 * 3- Procesar los datos para generar el HTML
 * 4- Cerrar la conexión
 */

function mostrarCervezas(){
    //PASO1. abrir la conexion con la db.
    $db = new PDO('mysql:host=localhost;dbname=db_cerveceria;charset=utf8','root','');

    //PASO2. enviamos consulta y obtengo resultado.
    //SELECT * FROM cervezas
    $query = $db->prepare('SELECT * FROM cervezas');
    $query->execute(); //ejecuta la consulta

    //PASO3. obtengo todos los datos q arroja la query.
    $cervezas = $query->fetchAll(PDO::FETCH_OBJ);

    echo "<ul>";
    foreach($cervezas as $cerveza){
        echo "<li>$cerveza->cerveza_id - $cerveza->nombre - $cerveza->IBU</li>";
    }
    echo "</ul>";

    //PASO4- no es necesario cerrar la conexión.
}

function eliminarCerveza($id){
    //DELETE FROM cervezas WHERE cerveza_id = 3 ($id);
     //PASO1. Abrir conexión con la db.
    $db = new PDO('mysql:host=localhost;dbname=db_cerveceria;charset=utf8','root','');

    //PASO2. envio la query
    $query = $db->prepare("DELETE FROM cervezas WHERE cerveza_id = $id");
    $query->execute();
}

echo "<h2>Lista de Cerevezas disponibles</h2>";

eliminarCerveza(3);
mostrarCervezas();