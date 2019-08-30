<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\RawMeterials;
use Faker\Generator as Faker;

$factory->define(RawMeterials::class, function (Faker $faker) {
    return [
        'name' => $faker->name('name'),
        'unit' => 'gm',
    ];
});
