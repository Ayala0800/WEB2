<?php

require_once './app/beers.php';
//el router va a leer la accion desde el parametro "action"

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; //accion x defecto
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/', $action); //parsea la accion

/*
 * action             function

 * /listar            showBeers();
 * /añadir            addBeer();
 * /eliminar/:ID      removeBeer($id);
 * /stock/:ID         updateBeer($id);
*/


switch ($params[0]){
    case 'home':
        showBeers();
        break;
    case 'agregar':
        addBeer();
        break;
    case 'eliminar':
        removeBeer($params[1]);
        break;
    case 'stock':
        updateBeer($params[1]);
        break;
    default:
        echo "ERROR 404";
    break;
}