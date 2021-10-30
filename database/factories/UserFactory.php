<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Role;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    $role = Role::inRandomOrder()->first();
    return [
        'username' => $faker->unique()->safeEmail,
        'password' => '$2y$10$9vsRN0kSwPTJgcx2QLAVvOwUACvAa3gJu.Dnqgyq5zH721xl1cSam', // password
        'remember_token' => Str::random(10),
        'role' => $role->name
    ];
});
