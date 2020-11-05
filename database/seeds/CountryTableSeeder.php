<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name' => 'USA',
        ]);
        Country::create([
            'name' => 'Canada',
        ]);
        Country::create([
            'name' => 'France',
        ]);
        Country::create([
            'name' => 'Spain',
        ]);
        Country::create([
            'name' => 'Germany',
        ]);
        Country::create([
            'name' => 'Italy',
        ]);
    }
}
