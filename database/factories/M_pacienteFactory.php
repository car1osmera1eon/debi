<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\M_paciente;
use Faker\Generator as Faker;

$factory->define(M_paciente::class, function (Faker $faker) {

    return [
        'id' => $faker->word,
        'id_tipo_identificacion' => $faker->word,
        'cedula' => $faker->word,
        'pais_id' => $faker->word,
        'primernombre' => $faker->word,
        'segundonombre' => $faker->word,
        'primerapellido' => $faker->word,
        'segundoapellido' => $faker->word,
        'fecha_nacimiento' => $faker->word,
        'lugar_nacimiento' => $faker->word,
        'edad' => $faker->randomDigitNotNull,
        'sexo' => $faker->randomDigitNotNull,
        'lugar_inscripcion' => $faker->word,
        'nombres_madre' => $faker->word,
        'nombres_padre' => $faker->word,
        'direccion' => $faker->text,
        'localidad' => $faker->text,
        'codigo_canton' => $faker->word,
        'codigo_provincia' => $faker->word,
        'codigo_parroquia' => $faker->word,
        'observaciones' => $faker->text,
        'telefono' => $faker->word,
        'email' => $faker->word
    ];
});
