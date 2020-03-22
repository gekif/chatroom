<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 1),
        'text' => $faker->sentence(10),
        'time' => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});
