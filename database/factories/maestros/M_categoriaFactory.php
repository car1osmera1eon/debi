<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\maestros\M_categoria;
use Faker\Generator as Faker;

$factory->define(M_categoria::class, function (Faker $faker) {

    return [
        'nom_categoria' => $faker->word,
        'descripcion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
