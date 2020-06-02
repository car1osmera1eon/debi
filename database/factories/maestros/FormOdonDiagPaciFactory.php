<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\maestros\Maestros\FormOdonDiagPaci;
use Faker\Generator as Faker;

$factory->define(FormOdonDiagPaci::class, function (Faker $faker) {

    return [
        'form_odon_id' => $faker->word,
        'paciente_id' => $faker->word,
        'tipo_diag_id' => $faker->word,
        'diagnostico' => $faker->text,
        'usuariocrea_id' => $faker->word,
        'usuariomod_id' => $faker->word,
        'ip_creacion' => $faker->word,
        'ip_modificacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
