<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Word;
use App\User;
use Faker\Generator as Faker;

$factory->define(Word::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'text' => $faker->realText(50),
        'impression' => $faker->realText(100),
        'action' => $faker->realText(200),
    ];
});
