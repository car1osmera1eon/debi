<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\agenda\HorarioMedico;
use Faker\Generator as Faker;

$factory->define(HorarioMedico::class, function (Faker $faker) {

    return [
        'medico_id' => $faker->word,
        'ndia' => $faker->word,
        'dia' => $faker->word,
        'hora_ini' => $faker->word,
        'hora_fin' => $faker->word,
        'estado' => $faker->word,
        'id_usuariocrea' => $faker->word,
        'id_usuariomod' => $faker->word,
        'ip_creacion' => $faker->word,
        'ip_modificacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
