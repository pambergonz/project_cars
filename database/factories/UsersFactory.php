<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
  return [
     'username'=>$faker->username,
     'name'=>$faker->name,
     'email'=>$faker->unique()->safeEmail,
     'email_verified_at'=>$faker->dateTime(),
     'password'=>$faker->password,
     'role'=>$faker->randomElement([
       'Admin',
       'Operator']),
     'remember_token'=>$faker->password,
  ];
});
