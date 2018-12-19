<?php

use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'image' =>'https://via.placeholder.com/230x280',
        'category' => 1,
        'valor' => $faker->randomFloat($nbMaxDecimals = 2, $min = 25, $max = 30),
        'promocional' => $faker->randomFloat($nbMaxDecimals = 2, $min = 18, $max = 24)
    ];
});
