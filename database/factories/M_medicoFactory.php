<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_medico;
use Faker\Generator as Faker;

$factory->define(M_medico::class, function (Faker $faker) {

    return [
        'usuario_id' => $faker->word,
        'especialidad_id' => $faker->word,
        'registrosanitario' => $faker->word,
        'registromedico' => $faker->word,
        'registrosenecyt' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
