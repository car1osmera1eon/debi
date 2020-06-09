<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\maestros\Maestros\M_diagnostico;
use Faker\Generator as Faker;

$factory->define(M_diagnostico::class, function (Faker $faker) {

    return [
        'diag_codigo' => $faker->word,
        'diag_nombre' => $faker->word,
        'diag_valor' => $faker->word,
        'LSex' => $faker->word,
        'LInf' => $faker->word,
        'LSup' => $faker->word,
        'Triv' => $faker->word,
        'errad' => $faker->word,
        'N_inter' => $faker->word,
        'Nin' => $faker->word,
        'Ninmtobs' => $faker->word,
        'No_CBD' => $faker->word,
        'No_Aph' => $faker->word,
        'FETAL' => $faker->word,
        'capitulo' => $faker->randomDigitNotNull,
        'Lista1' => $faker->word,
        'Grupo1' => $faker->word,
        'Lista5' => $faker->word,
        'ACTUALIZACIONES_CIE_10' => $faker->word,
        'year_modifi' => $faker->word,
        'year_aplicacion' => $faker->randomDigitNotNull,
        'prinmorta' => $faker->word,
        'prinmorbi' => $faker->word,
        'lm_morbi' => $faker->word,
        'lm_morta' => $faker->word,
        'lgbd165' => $faker->word,
        'lOMSBeck' => $faker->word,
        'lgbd190' => $faker->word,
        'NOTDiaria' => $faker->word,
        'NOTSemanal' => $faker->word,
        'Sistema_Especial' => $faker->word,
        'birmm' => $faker->word,
        'poco_util' => $faker->word,
        'epi_morta' => $faker->word,
        'epi_morta_m5' => $faker->word,
        'diag_status' => $faker->word,
        'diag_local' => $faker->word,
        'diag_edad_estado' => $faker->word,
        'diag_edad_ini' => $faker->randomDigitNotNull,
        'diag_edad_fin' => $faker->randomDigitNotNull,
        'diag_esta_rd' => $faker->word
    ];
});
