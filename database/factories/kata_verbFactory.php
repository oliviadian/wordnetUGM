<?php

use App\kata_verb;
use Faker\Generator as Faker;

$factory->define(\App\kata_verb::class, function (Faker $faker) {
    return [
        'kata_dasar_v' => $faker->word,
        'makna_dasar_v' => $faker->sentence
    ];
});
