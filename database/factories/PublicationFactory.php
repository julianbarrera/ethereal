<?php

use Faker\Generator as Faker;
use App\Publication;

$factory->define(Publication::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'messaje'=> $faker->text

        // FK
        'usarioid'
    ];
});
