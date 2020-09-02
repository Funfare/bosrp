<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Organization;
use App\Models\Qualification;
use App\Models\QualificationType;
use Faker\Generator as Faker;

$factory->define(Qualification::class, function (Faker $faker) {
    return [
        'organization_id' => function() {
            return factory(Organization::class)->create()->id;
        },
        'qualificaton_type_id' => function() {
            return QualificationType::inRandomOrder()->first()->id;
        },
        'short_name' => $faker->words(1),
        'name' => $faker->words(2),
        'priority' => $faker->numberBetween(1,50)
    ];
});
