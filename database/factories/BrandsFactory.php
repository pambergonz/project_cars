<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;


$factory->define(Brand::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    return [
      'brand'=>$faker->vehicleBrand,
    ];
});
