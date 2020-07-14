<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'btc_wallet' => $faker->word,
        'eth_wallet' => $faker->word,
        'ltc_wallet' => $faker->word,
    ];
});
