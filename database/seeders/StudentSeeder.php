<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fake Data
        for($i = 1; $i <= 10; $i++) {
            student::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email()
            ]);
        }      

        // $json = File::get(path:'database/json/students.json');
        // $students = collect(json_decode($json));        

        // $students->each(function($student){
        //     student::create([
        //         'name' => $student->name,
        //         'email' => $student->email
        //     ]);
        // });
        

        // $students = collect(
        //     [
        //         [
        //             'name' => 'Wajahat Awan',
        //             'email' => 'waji@gmail.com'
        //         ],
        //         [
        //             'name' => 'Daniyal Afzal',
        //             'email' => 'dani@gmail.com'
        //         ],
        //         [
        //             'name' => 'Danish Bashir',
        //             'email' => 'danish@gmail.com'
        //         ]
        //     ]
        // );
        
        // $students->each(function($student){
        //     student::insert($student);
        // });    
    }
}
 