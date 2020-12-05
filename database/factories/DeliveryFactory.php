<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Delivery;
use Faker\Generator as Faker;

$factory->define(Delivery::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'cost' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
