<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store() {
       
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o la contraseña son incorrectos. Por favor, inténtalo de nuevo.'
            ]);
            
        } else {
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin');
            }else{
                return redirect()->route('client');
            }
        }
    }

    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }
}
