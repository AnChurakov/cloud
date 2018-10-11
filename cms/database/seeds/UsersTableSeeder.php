<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'TestName',
            'lastname' => 'TestLastname',
            'email' => 'test@mail.ru',
            'password' => bcrypt('test'),
            'phone' => '8 999 999 99 99',
            'address' => 'Izhevsk city, Lenin street',
            'role_id' => '1'

        ]);
    }
}
