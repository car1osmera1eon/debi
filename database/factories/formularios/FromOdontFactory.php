<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelsormularios\Formularios\FromOdont;
use Faker\Generator as Faker;

$factory->define(FromOdont::class, function (Faker $faker) {

    return [
        'paciente_id' => $faker->word,
        'agenda_id' => $faker->word,
        'motivo_consulta' => $faker->text,
        'enfer_probl_actual' => $faker->text,
        'ap_alergia_antibiotico' => $faker->text,
        'ap_alergia_anestecia' => $faker->text,
        'ap_vih' => $faker->word,
        'ap_tuberculosis' => $faker->word,
        'ap_asma' => $faker->word,
        'ap_diabetes' => $faker->word,
        'ap_hipertension' => $faker->word,
        'ap_enf_cardiaca' => $faker->text,
        'ap_otros' => $faker->text,
        'sv_presion_arterial' => $faker->word,
        'sv_frecuencia_cardiaca' => $faker->word,
        'sv_temperatura' => $faker->word,
        'sv_frecuencia_respiratoria' => $faker->word,
        'ese_labios' => $faker->text,
        'ese_mejilla' => $faker->text,
        'ese_maxilar_superior' => $faker->text,
        'ese_maxilar_inferior' => $faker->text,
        'ese_lengua' => $faker->text,
        'ese_paladar' => $faker->text,
        'ese_piso' => $faker->text,
        'ese_orofaringe' => $faker->text,
        'ese_carrillos' => $faker->text,
        'ese_gland_salivales' => $faker->text,
        'ese_oro_faringe' => $faker->text,
        'ese_atm' => $faker->text,
        'ese_ganglios' => $faker->text
    ];
});
