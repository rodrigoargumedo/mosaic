<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Mosaic\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
      'name' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'password' => $password ?: $password = bcrypt('secret'),
      'remember_token' => str_random(10),
    ];
});

$factory->define(Mosaic\Product::class, function(Faker\Generator $faker) {
    return [
      'name' => $faker->name,
      'description' => $faker->paragraph(2),
      'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99)
    ];
});