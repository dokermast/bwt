<?php

use Illuminate\Database\Seeder;

class CompanyUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CompanyUser::class, 20)->create();
    }
}
