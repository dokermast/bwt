<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CompanyUser;
use Faker\Generator as Faker;

$factory->define(CompanyUser::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 5),
        'company_id' => rand(1,6),
    ];
});
