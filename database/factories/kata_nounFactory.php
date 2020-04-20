<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\kata_noun;
use Faker\Generator as Faker;

$factory->define(\App\kata_noun::class, function (Faker $faker) {
    return [
        'id_noun' => 1,
        'kata_dasar_n' => $faker->word,
        'makna_dasar_n' => $faker->sentence
    ];
});
