<?php

use Faker\Generator as Faker;

$factory->define(App\Sello::class, function (Faker $faker) {
    $client = $faker ->randomElement(['Manufacturera Lee', 'Private Label', '7 Leguas', 'Wrangler Torreon', 'Monty', 'OMJC', 'Wrangler Chihuahua', 'Garrido Martinez', 'Martin Verastegui', 'AALFS UNO']);
    $operator = $faker ->randomElement(['Eduardo Alvarado Garcia','Everardo Davila Morales', 'Ramon Sanchez Martinez','Jorge Monsivais Alvarado', 'Hector Molina Lopez', 'Nestor Zamora Perez']);
    $sellado = $faker ->randomElement(['Hector Rodriguez Zamarron', 'Ruben Santana Flores ', 'Antonio Macias Perez', 'Valentin Flores Enriquez']);
    $linea = $faker ->randomElement(['Transportes Evaristo', 'Fletes Rapidos Parras', 'Transportes Nomadas  ', 'Mapa', 'XCF', 'Garcia Express', 'BD', 'T.CONE', 'Crowley', 'Tres Guerras']);


    return [
        'num_sello' =>str_random(10),
        'fecha_coloc' => $faker ->date($format = 'Y-m-d' , $max = '1993-12-30'),
        'linea_trans' =>$linea,
        'num_caja' =>str_random(10),
        'cliente' =>$client,
        'operador' =>$operator,
        'sellador' =>$sellado,
    ];
});
