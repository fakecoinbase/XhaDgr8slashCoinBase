<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PLan_1;
use Faker\Generator as Faker;

$factory->define(PLan1::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'plan_type' => $faker->word,
        'min_invest' => $faker->numberBetween(-10000, 10000),
        'max_invest' => $faker->numberBetween(-10000, 10000),
        'daily_intrest' => $faker->numberBetween(-10000, 10000),
        'term_days' => $faker->numberBetween(-10000, 10000),
        'roi' => $faker->numberBetween(-10000, 10000),
    ];
});
