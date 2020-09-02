<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Member;
use App\Models\Organization;
use App\Models\Position;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'organization_id' => function() {
            return factory(Organization::class)->create()->id;
        },
        'position_id' => null,
        'name' => $faker->name,


    ];
});
$factory->state(Member::class, 'position', [
    'position_id' => function() {
        return factory(Position::class)->create()->id;
    },
]);
