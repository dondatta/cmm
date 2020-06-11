<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rank;
use Faker\Generator as Faker;

$factory->define(Rank::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->name(['female']),
        'user_image' => $faker->imageUrl($width = 200, $height = 200),
        'networth' => $faker->numberBetween($min = 100000, $max = 9000000),
        'cat' => $faker->randomElement(['Fashion','Urban','Reality','Influencer']),
        'detail' => $faker->paragraphs($nb = 3, $asText = true),

    ];
});
