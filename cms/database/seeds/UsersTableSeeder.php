<?php

use CMS\User;
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
        User::create([
            'name' => 'TestName',
            'lastname' => 'TestLastname',
            'email' => 'test@mail.ru',
            'password' => bcrypt('test'),
            'phone' => '8 999 999 99 99',
            'address' => 'Izhevsk city, Lenin street',
            'role_id' => '1'
        ]);
        User::create([
            'name' => 'User1',
            'lastname' => 'User1Lastname',
            'email' => 'user1@mail.ru',
            'password' => bcrypt('user'),
            'phone' => '8 999 999 99 99',
            'address' => 'Izhevsk city, Lenin street',
            'role_id' => '1'
        ]);
    }
}
