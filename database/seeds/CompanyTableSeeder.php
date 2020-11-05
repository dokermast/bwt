<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'BMW',
            'country_id' => 1
        ]);
        Company::create([
            'name' => 'IBM',
            'country_id' => 2
        ]);
        Company::create([
            'name' => 'QWE',
            'country_id' => 3
        ]);
        Company::create([
            'name' => 'Sony',
            'country_id' => 4
        ]);
        Company::create([
            'name' => 'Apple',
            'country_id' => 5
        ]);
        Company::create([
            'name' => 'LG',
            'country_id' => 6
        ]);
    }
}
