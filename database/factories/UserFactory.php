<?php

use App\occupant;
use App\owner;
use App\ownership;
use App\personInfo;
use App\rent;
use App\userInfo;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/*$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(personInfo::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'lastNameF' => $faker->lastName,
        'lastNameM' => $faker->lastName,
        'email'=>$faker->email,
        'phone'=>$faker->phoneNumber,
    ];
});

$factory->define(userInfo::class, function (Faker $faker) {

    return [
        'user' => $faker->userName,
        'password'=>$faker->password,
         'fk_idpersonInfo'=>personInfo::all()->random()->id,
    ];
});

$factory->define(occupant::class, function (Faker $faker) {

    return [
        'fk_iduserInfo'=>userInfo::all()->random()->id,
    ];
});

$factory->define(owner::class, function (Faker $faker) {

    return [
        'fk_iduserInfo'=>userInfo::all()->random()->id,
    ];
});

$factory->define(ownership::class, function (Faker $faker) {

    return [
        'description',
        'salePrice',
        'rentPrice',
        'fk_idowner'=>owner::all()->random()->id,
    ];
});


$factory->define(rent::class, function (Faker $faker) {

    return [
        'checkIn',
        'checkOut',
        'total',
        'fk_idownership'=>ownership::all()->random()->id,
        'fk_idoccupant'=>occupant::all()->random()->id,
    ];
});

$factory->define(photoInfo::class, function (Faker $faker) {

    return [
        'name',
        'description',
        'url',
        'fk_idownership'=>ownership::all()->random()->id,
    ];
});

$factory->define(adressInfo::class, function (Faker $faker) {

    return [
        'country',
        'state',
        'city',
        'street',
        'sm',
        'fk_idownership'=>ownership::all()->random()->id,
    ];
});




