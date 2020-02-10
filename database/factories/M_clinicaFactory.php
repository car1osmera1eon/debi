<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_clinica;
use Faker\Generator as Faker;

$factory->define(M_clinica::class, function (Faker $faker) {

    return [
        'ruc' => $faker->word,
        'razonsocial' => $faker->word,
        'nombrecomercial' => $faker->word,
        'nombre_corto' => $faker->word,
        'provincia_id' => $faker->word,
        'direccion' => $faker->word,
        'email' => $faker->word,
        'telefono1' => $faker->word,
        'telefono2' => $faker->word,
        'logo' => $faker->word,
        'estado' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
