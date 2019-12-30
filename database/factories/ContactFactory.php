<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Contact;
use Faker\Generator as Faker;

$factory->define(App\Model\Contact::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'email'     => $faker->unique()->safeEmail,
    ];
});
