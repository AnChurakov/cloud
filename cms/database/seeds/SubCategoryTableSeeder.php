<?php

use CMS\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Боевые мехи',
            'desc' => 'мехи, используемые в гражданских целях, например для выполнения тяжёлых строительных работ'
        ]);
    }
}
