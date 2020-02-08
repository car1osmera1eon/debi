<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_pais;
use Faker\Generator as Faker;

$factory->define(M_pais::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'name' => $faker->word,
        'nom' => $faker->word,
        'iso2' => $faker->word,
        'iso3' => $faker->word,
        'phone_code' => $faker->word
    ];
});
