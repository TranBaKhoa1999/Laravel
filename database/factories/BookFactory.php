<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'content' => $faker->text(),
        'title' => 'bai viet ' .$faker->unique()->numberBetween(1,10)
    ];
});
