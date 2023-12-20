<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(path:'database/json/users.json');
        $users = collect(json_decode($json)); 

        $users->each(function($user){
            users::create([
                'name' => $user->name,
                'email' => $user->email,
                'age' => $user->age,
                'city' => $user->city,
            ]);
        });
    }
}
