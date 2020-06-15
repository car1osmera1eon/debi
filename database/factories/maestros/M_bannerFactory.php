<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Maestros\M_banner;
use Faker\Generator as Faker;

$factory->define(M_banner::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->word,
        'image' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
