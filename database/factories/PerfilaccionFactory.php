<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Perfilaccion;
use Faker\Generator as Faker;

$factory->define(Perfilaccion::class, function (Faker $faker) {

    return [
        'perfil_id' => $faker->word,
        'accion_id' => $faker->word,
        'submodulo_id' => $faker->word,
        'submodulo2_id' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
