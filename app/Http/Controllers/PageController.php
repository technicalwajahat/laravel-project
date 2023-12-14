<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showUser() {
        return "<h1>Welcome to Controller Lecture</h1>";
    }
}
