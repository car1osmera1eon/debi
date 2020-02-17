<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Agenda;
use Faker\Generator as Faker;

$factory->define(Agenda::class, function (Faker $faker) {

    return [
        'fechaini' => $faker->date('Y-m-d H:i:s'),
        'fechafin' => $faker->date('Y-m-d H:i:s'),
        'paciente_id' => $faker->word,
        'medico_id' => $faker->word,
        'proc_consul' => $faker->word,
        'consultorio_id' => $faker->word,
        'procedimiento_id' => $faker->word,
        'tipo_cita' => $faker->word,
        'estado_cita' => $faker->word,
        'clinica_id' => $faker->word,
        'reagenda_id' => $faker->word,
        'observaciones' => $faker->text,
        'usuarioconfirma_id' => $faker->word,
        'especialidad_id' => $faker->word,
        'seguro_id' => $faker->word,
        'estado' => $faker->word,
        'usuariocrea_id' => $faker->word,
        'usuariomod_id' => $faker->word,
        'ip_creacion' => $faker->word,
        'ip_modificacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'observacion_proc' => $faker->word,
        'diagnostico_proc' => $faker->word
    ];
});
