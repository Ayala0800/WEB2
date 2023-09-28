<?php

function getCoches(){

    $coche0 = new stdClass();
    $coche0->id = '001';
    $coche0->modelo = 'F40';
    $coche0->marca = 'Ferrari';
    $coche0->color = 'Rojo';
    $coche0->foto = './img/ferrari.jpg';
    $coche0->potencia = "540cv";

    $coche1 = new stdClass();
    $coche1->id = '002';
    $coche1->modelo = '335i';
    $coche1->marca = 'BMW';
    $coche1->color = 'Blanco Alpina';
    $coche1->foto = './img/bmw.jpg';
    $coche1->potencia = "280cv";

    $coche2 = new stdClass();
    $coche2->id = '003';
    $coche2->modelo = '911 Turbo';
    $coche2->marca = 'Porsche';
    $coche2->color = 'Silver';
    $coche2->foto = './img/porsche.jpg';
    $coche2->potencia = "380cv";

    $coche3 = new stdClass();
    $coche3->id = '004';
    $coche3->modelo = 'C63s';
    $coche3->marca = 'Mercedes-Benz';
    $coche3->color = 'Negro';
    $coche3->foto = './img/mercedes.jpg';
    $coche3->potencia = "410cv";

    $coche4 = new stdClass();
    $coche4->id = '005';
    $coche4->modelo = 'RS3';
    $coche4->marca = 'Audi';
    $coche4->color = 'Azul';
    $coche4->foto = './img/audi.jpg';
    $coche4->potencia = "355cv";

    $coches = [$coche0, $coche1, $coche2, $coche3, $coche4];

    return $coches;
}

/**
 * Obtiene el coche segun un id pasado como parametro
 */
function getCochesById($id){
    $coches = getCoches();
    foreach($coches as $coche){
        if ($id == $coche->id)
        return $coche;
    }
}