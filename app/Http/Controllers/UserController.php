<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        // $users = DB::table('users')->get();
        // $users = DB::table('users')->where('id', 2)->get();
        // $users = DB::table('users')->find(2);

        // $users = DB::table('users')
        //             ->select('city')
        //             ->distinct()
        //             ->get();
   
        // $users = DB::table('users')
        //             ->pluck('name');
   
        $users = DB::table('users')
                    ->where('age', 22)
                    ->get();

        return $users;
        // dd($users);
        // dump($users);

        // foreach($users as $user) {
        //     echo $user->name . "<br>";
        // }

        // return view('users', ['data' => $users]);
    }

    public function singleUser(string $id) {
        $user = DB::table('users')->where('id', $id)->get(); 
        return view('user', ['data' => $user]);
    }
}
