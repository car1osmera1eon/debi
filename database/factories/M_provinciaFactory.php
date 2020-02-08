<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_provincia;
use Faker\Generator as Faker;

$factory->define(M_provincia::class, function (Faker $faker) {

    return [
        'codigo_m_provincia' => $faker->word,
        'nombre_m_provincia' => $faker->word,
        'codigo_nombre' => $faker->word
    ];
});
