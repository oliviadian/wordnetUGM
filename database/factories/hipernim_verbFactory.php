<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\hipernim_verb;
use Faker\Generator as Faker;

$factory->define(\App\hipernim_verb::class, function (Faker $faker) {
    return [
        'id_kata_v' => 3,
        'hipernim_v' => $faker->word,
        'makna_hipernim_v' => $faker->sentence
    ];
});
