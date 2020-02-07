<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Permisos;
use Faker\Generator as Faker;

$factory->define(Permisos::class, function (Faker $faker) {

    return [
        'perfil_id' => $faker->word,
        'usuario_id' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
