<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_canton;
use Faker\Generator as Faker;

$factory->define(M_canton::class, function (Faker $faker) {

    return [
        'codigo_provincia' => $faker->word,
        'codigo_m_canton' => $faker->word,
        'nombre_m_canton' => $faker->word,
        'codigo_nombre' => $faker->word
    ];
});
