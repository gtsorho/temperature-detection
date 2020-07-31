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

         User::create([
            "name" => 'Debbie',
            "phone" => '+233202429593',
            "email" => 'deborahludwine@gmail.com'
         ]);

         

    }
}
