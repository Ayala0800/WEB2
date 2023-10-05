<?php

require_once './app/beers.php';
//el router va a leer la accion desde el parametro "action"

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; //accion x defecto
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

//parsea la accion
$params = explode('/', $action);





switch ($params[0]){
    case 'home':
        showBeers();
    default:
        echo "ERROR 404";
    break;
}

/*
 * action           function

 * /listar            showBeers();
 * /coche/:id       showCoche($id)
*/