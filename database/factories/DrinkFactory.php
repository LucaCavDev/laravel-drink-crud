<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [

        'name' => $faker -> firstNameFemale,
        'alchol_content' => $faker -> numberBetween($min = 1, $max = 99),
        'price' => $faker -> numberBetween($min = 5, $max = 999),

    ];
});
