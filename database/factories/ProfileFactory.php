<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'age' => $faker->numberBetween($min=18, $max=90),
        'number_phone' => $faker->e164PhoneNumber,
        'address' => $faker->address
    ];
});
