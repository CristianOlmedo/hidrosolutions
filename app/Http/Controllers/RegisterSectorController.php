<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterSectorController extends Controller
{
    public function create()
    {
        return view('auth.registerSector');
    }
}