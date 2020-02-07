<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {

    return [
        'identificacion' => $faker->word,
        'name' => $faker->word,
        'primernombre' => $faker->word,
        'segundonombre' => $faker->word,
        'primerapellido' => $faker->word,
        'segundoapellido' => $faker->word,
        'email' => $faker->word,
        'password' => $faker->word,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
