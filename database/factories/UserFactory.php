<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => $password ?: $password = bcrypt('1234567'),
                'remember_token' => str_random(10),
                'role_id' => '3',
                'phone' => $faker->phoneNumber,
                'coverimage' => 'test image path here',
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'middle_name' => $faker->firstName()
    ];
});
