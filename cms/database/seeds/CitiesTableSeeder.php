<?php

use CMS\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Ижевск'
        ]);
        City::create([
            'name' => 'Можга'
        ]);
        City::create([
            'name' => 'Воткинск'
        ]);
    }
}
