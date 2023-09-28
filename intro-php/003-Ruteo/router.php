<?php
require_once 'home.php';

//el router va a leer la accion desde el parametro "action"

$action = 'home'; //accion x defecto
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

//parsea la accion Ej: noticia/1 --> ['noticia', 1]
$params = explode('/', $action);

switch ($params[0]){ //en primer posicion tengo la accion real
    case 'home':
        showHome(); //muestra todas las marcas
        break;
    case 'coche':
        showCocheById($params[1]); //muestra una auto
        break;
    default:
    echo "ERROR 404";
    break;
}
/*
 * action           function

 * /home            showHome();
 * /coche/:id       showCoche($id)
*/