<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'Hieu Tran',
            'gender' => 'Nam',
            'phone' =>  '0985933648',
            'birthday' => '1997-03-30',
            'email' => 'tinasot9874@gmail.com',
            'password' => Hash::make('151503654'),
        ]);
    }
}
