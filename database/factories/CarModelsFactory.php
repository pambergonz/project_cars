<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarModel;
use Faker\Generator as Faker;

$factory->define(CarModel::class, function (Faker $faker) {
  $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    return [
      'model'=>$faker->vehicleModel,
    ];
});
