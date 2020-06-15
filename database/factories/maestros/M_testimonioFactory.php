<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_testimonio;
use Faker\Generator as Faker;

$factory->define(M_testimonio::class, function (Faker $faker) {

    return [
        'clinica_id' => $faker->word,
        'paciente_id' => $faker->word,
        'testimonio' => $faker->word,
        'image' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
