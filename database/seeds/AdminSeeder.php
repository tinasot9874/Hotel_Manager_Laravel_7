<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'role_id' => 2,
            'name' => 'Minh Hieu',
            'phone' =>  '0985933648',
            'address' => 'Ho Chi Minh',
            'birthday' => '1997-03-30',
            'gender' => 'Nam',
            'email' => 'minhieu9874@gmail.com',
            'password' => Hash::make('151503654'),
        ]);
    }
}
