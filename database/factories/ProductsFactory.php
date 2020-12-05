<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {

    return [
        'product_name' => $faker->word,
        'category_id' => $faker->word,
        'product_image' => $faker->text,
        'price' => $faker->text,
        'description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
