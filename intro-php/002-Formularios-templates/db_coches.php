<?php

function getCoches(){

    $coche0 = new stdClass();
    $coche0->id = '001';
    $coche0->modelo = 'F40';
    $coche0->marca = 'Ferrari';
    $coche0->color = 'Rojo';
    $coche0->foto = 'https://cloudfront-us-east-1.images.arcpublishing.com/infobae/L3UYLCT34NA5LFLKBVXQRA6NHM.jpg';
    $coche0->potencia = "540cv";

    $coche1 = new stdClass();
    $coche1->id = '002';
    $coche1->modelo = '335i';
    $coche1->marca = 'BMW';
    $coche1->color = 'Blanco Alpina';
    $coche1->foto = 'https://blogdebmw.com/wp-content/uploads/2021/02/alpine-white-bmw-e92-335i-gets-a-suspension-update-2-1-2048x1280.jpg';
    $coche1->potencia = "280cv";

    $coche2 = new stdClass();
    $coche2->id = '003';
    $coche2->modelo = '911 Turbo';
    $coche2->marca = 'Porsche';
    $coche2->color = 'Silver';
    $coche2->foto = 'https://presskit.porsche.de/models/assets/images/7/S19_0307-4ab19077.jpg';
    $coche2->potencia = "380cv";

    $coche3 = new stdClass();
    $coche3->id = '004';
    $coche3->modelo = 'C63s';
    $coche3->marca = 'Mercedes-Benz';
    $coche3->color = 'Negro';
    $coche3->foto = 'https://besthqwallpapers.com/Uploads/2-11-2017/26810/thumb2-mercedes-amg-c63s-coupe-4k-sports-coupe-black-c63s-tuning-c-class-coupe.jpg';
    $coche3->potencia = "410cv";

    $coche4 = new stdClass();
    $coche4->id = '005';
    $coche4->modelo = 'RS3';
    $coche4->marca = 'Audi';
    $coche4->color = 'Azul';
    $coche4->foto = 'https://cdn.motor1.com/images/mgl/gRLzN/s3/audi-rs-3-sportback-2018.jpg';
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