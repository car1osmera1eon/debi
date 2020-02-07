<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Perfil;
use Faker\Generator as Faker;

$factory->define(Perfil::class, function (Faker $faker) {

    return [
        'sistema_id' => $faker->word,
        'nom_perfil' => $faker->text,
        'estado' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
