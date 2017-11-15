<?php

use App\adressInfo;
use App\occupant;
use App\owner;
use App\ownership;
use App\personInfo;
use App\photoInfo;
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
        'description'=>$faker->paragraph(1),
        'salePrice'=>$faker->randomDigit,
        'rentPrice'=>$faker->randomDigit,
        'fk_idowner'=>owner::all()->random()->id,
    ];
});


$factory->define(rent::class, function (Faker $faker) {

    return [
        'checkIn'=>$faker->dateTime,
        'checkOut'=>$faker->dateTime,
        'total'=>$faker->randomDigit,
        'fk_idownership'=>ownership::all()->random()->id,
        'fk_idoccupant'=>occupant::all()->random()->id,
    ];
});

$factory->define(photoInfo::class, function (Faker $faker) {

    return [
        'name'=>$faker->name,
        'description'=>$faker->paragraph(1),
        'url'=>$faker->url,
        'fk_idownership'=>ownership::all()->random()->id,
    ];
});

$factory->define(adressInfo::class, function (Faker $faker) {

    return [
        'country'=>$faker->country,
        'state'=>$faker->streetAddress,
        'city'=>$faker->city,
        'street'=>$faker->streetName,
        'sm'=>$faker->streetAddress,
        'fk_idownership'=>ownership::all()->random()->id,
    ];
});




