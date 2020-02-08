<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_parroquia;
use Faker\Generator as Faker;

$factory->define(M_parroquia::class, function (Faker $faker) {

    return [
        'codigo_canton' => $faker->word,
        'codigo_m_parroquia' => $faker->word,
        'nombre_m_parroquia' => $faker->word,
        'codigo_nombre' => $faker->word
    ];
});
