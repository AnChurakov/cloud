<?php

use CMS\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Мехи',
            'desc' => 'вид фантастических и возможных перспективных машин (наиболее часто боевых), передвигающихся при помощи ног (обычно двух или четырёх), и пилотируемых человеком, находящимся внутри.'
        ]);
    }
}
