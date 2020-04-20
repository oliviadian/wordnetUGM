<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\hipernim_noun;
use Faker\Generator as Faker;

$factory->define(\App\hipernim_noun::class, function (Faker $faker) {
    return [
        'id_kata_n' => 3,
        'hipernim_n' => $faker->word,
        'makna_hipernim_n' => $faker->sentence
    ];
});
