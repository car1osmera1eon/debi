<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_consultorio;
use Faker\Generator as Faker;

$factory->define(M_consultorio::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'clinica_id' => $faker->word,
        'observacion' => $faker->text,
        'estado' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
