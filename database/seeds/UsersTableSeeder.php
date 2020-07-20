<?php

use App\User;
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
            "name" => 'geroge',
            "phone" => '+233508924141',
            "email" => 'sorho@yahoo.com'
         ]);
    }
}
