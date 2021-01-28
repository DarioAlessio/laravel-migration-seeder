<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName,
        'street'=> $faker-> address,
        'number_employees'=>  rand(1,50),
    ];
});
