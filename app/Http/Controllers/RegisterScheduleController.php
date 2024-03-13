<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterScheduleController extends Controller
{
    public function create(){
        return view('auth.registerSchedule');
    }
}
