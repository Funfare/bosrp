<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Organization;
use App\Models\Position;
use Faker\Generator as Faker;

$factory->define(Position::class, function (Faker $faker) {
    return [
        'organization_id' => function() {
            return factory(Organization::class)->create()->id;
        },
        'name' => $faker->jobTitle,
        'seats' => $faker->numberBetween(1, 7),
    ];
});
