<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\User::create([
            'name'=>'Mohamed',
            'email'=>'shiro.kurd1@hotmail.com',
            'rule'=>'admin',
            'password'=>bcrypt(123456),


        ]);
    }
}
