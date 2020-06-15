<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\maestros\Maestros\M_sitio;
use Faker\Generator as Faker;

$factory->define(M_sitio::class, function (Faker $faker) {

    return [
        'clinica_id' => $faker->word,
        'nombre_sitio' => $faker->word,
        'mision' => $faker->word,
        'vision' => $faker->word,
        'quienes_somos' => $faker->text,
        'facebook' => $faker->word,
        'twitter' => $faker->word,
        'instagram' => $faker->word,
        'telegram' => $faker->word,
        'whatsapp' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
