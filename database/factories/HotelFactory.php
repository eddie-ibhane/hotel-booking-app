<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    return [
        'name' => rtrim(ucfirst($faker->text(20)),'.'),
        'description' => $faker->sentence(),
        'created_at' => $faker->dateTimeBetween('-20 days', '-10days'),
        'updated_at' => $faker->dateTimeBetween('-5 day', '-5 days'),
    ];
});
