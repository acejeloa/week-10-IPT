<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inventory;
use Faker\Generator as Faker;

$factory->define(Inventory::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->word(),
        'value' => $faker->word(),
        'status' => $faker->word()
    ];
});
