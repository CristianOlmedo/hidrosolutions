<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InconsistenciesNotificationController extends Controller
{
    public function create(){
        return view('auth.inconsistenciesNotification');
    }
}
