<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        // $users = DB::table('users')->get();
        $users = DB::table('users')->where('id', 2)->get();
        // $users = DB::table('users')->find(2);

        // return $users;
        // dd($users);
        // dump($users);

        // foreach($users as $user) {
        //     echo $user->name . "<br>";
        // }

        return view('users', ['data' => $users]);
    }

    public function singleUser(string $id) {
        $users = DB::table('users')->where('id', $id)->get(); 
        return $users;
    }
}
