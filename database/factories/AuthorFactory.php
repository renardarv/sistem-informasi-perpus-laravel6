<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name, // $faker->name sudah disediakan di dalam facotry itu sendiri
        
    ];
});
