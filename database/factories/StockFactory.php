<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    return [
        'meterial_id' => rand(1,20),
        'quantity' => rand(),
        'price' => 10
    ];
});
