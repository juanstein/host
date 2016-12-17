<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),

    ];
});

$factory->define(App\Owner::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        //'spaces'=> $faker->words($nb = 3, $asText = false),
        'profile_pic' => $faker->imageUrl($width = 640, $height = 480),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),

    ];
});

$factory->define(App\Space::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->company,
        'owner_id' => $faker->numberBetween(1,100),
        //'location' => $faker->address,
        'price' => $faker->randomFloat(2, 0, 1000),
        'description' => $faker->realText(100),
        'status' => $faker->boolean,
        'coffee' => $faker->boolean,
        'bar' => $faker->boolean,
        'meeting_room' => $faker->boolean,
        'wifi' => $faker->randomElement(array('20mb','50mb','100mb')),
        'prints' => $faker->randomElement(array(30,50,100)),
    ];
});

$factory->define(App\Location::class, function (Faker\Generator $faker) {

    return [
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->streetAddress,

    ];
});

$factory->define(App\Transaction::class, function (Faker\Generator $faker) {

    return [
        'space_id' => $faker->numberBetween(1,100),
        'user_id' => $faker->numberBetween(1,100),
        'check_in_date' => $faker->dateTimeBetween('-1 years','now'),
        'check_out_date' => $faker->dateTimeBetween('now','+1 years'),

    ];
});

/*$factory->define(App\Spec::class, function (Faker\Generator $faker) {

    return [
        'coffee' => $faker->boolean,
        'bar' => $faker->boolean,
        'meeting_room' => $faker->boolean,
        'wifi' => $faker->randomElement(array('20mb','50mb','100mb')),
        'wifi' => $faker->randomElement(array(30,50,100)),

    ];
});*/
