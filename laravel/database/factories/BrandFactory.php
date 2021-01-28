<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
      'name'=> $faker ->firstName(),
      'logo'=> $faker ->word(),
      'number_locations'=>     rand(1,50),
    ];
});
