<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_procedimiento;
use Faker\Generator as Faker;

$factory->define(M_procedimiento::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'observacion' => $faker->text,
        'estado' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
