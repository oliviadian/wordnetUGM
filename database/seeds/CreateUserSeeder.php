<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@mail.com',
               'admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@mail.com',
               'admin'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
