<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\schedule;
// use App\Models\User;

// use Illuminate\Support\Facades\DB;



class Schedulecontroller extends Controller
{
    public function register(){
        return view('register');
    }

    public function oneday(){
        return view('oneday');
    }
}
